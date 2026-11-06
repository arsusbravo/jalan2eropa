<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\TipController;
use App\Http\Requests\Admin\ContentRequest;
use App\Models\Content;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ContentController extends AdminController
{
    public function index(Request $request): Response
    {
        $search = $request->string('q')->toString();
        $inUse = array_column(TipController::TIPS, 'content');

        return Inertia::render('admin/content/index', [
            'filters' => ['q' => $search],
            'items' => Inertia::scroll(Content::query()
                ->when($search !== '', fn ($query) => $query->where('title', 'like', '%'.$search.'%'))
                ->orderBy('title')
                ->paginate(25)
                ->withQueryString()
                ->through(fn (Content $content): array => [
                    'id' => $content->id,
                    'title' => $content->title,
                    'slug' => $content->slug,
                    'type' => $content->type,
                    'is_tip' => in_array($content->slug, $inUse, true),
                    'updated_at' => $content->updated_at?->toDateString(),
                ])),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('admin/content/form', ['item' => null]);
    }

    public function store(ContentRequest $request): RedirectResponse
    {
        $content = Content::query()->create($this->blankToEmpty($request->validated(), ['content']));
        $this->done('Content created.');

        return to_route('admin.content.edit', $content);
    }

    public function edit(Content $content): Response
    {
        return Inertia::render('admin/content/form', [
            'item' => $content->only(['id', 'title', 'slug', 'type', 'content']) + [
                'is_tip' => in_array($content->slug, array_column(TipController::TIPS, 'content'), true),
            ],
        ]);
    }

    public function update(ContentRequest $request, Content $content): RedirectResponse
    {
        $content->update($this->blankToEmpty($request->validated(), ['content']));
        $this->done('Content saved.');

        return to_route('admin.content.edit', $content);
    }

    public function destroy(Content $content): RedirectResponse
    {
        if (in_array($content->slug, array_column(TipController::TIPS, 'content'), true)) {
            $this->done('This page is used by the public Tips section and cannot be deleted.', 'error');

            return back();
        }

        $content->delete();
        $this->done('Content deleted.');

        return to_route('admin.content.index');
    }
}
