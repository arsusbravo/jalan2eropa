import { Head, Link, useForm } from '@inertiajs/react';
import AffiliateController from '@/actions/App/Http/Controllers/Admin/AffiliateController';
import { DeleteButton } from '@/components/admin/delete-button';
import { Field, textareaClass } from '@/components/admin/field';
import { PageHeader } from '@/components/admin/page-header';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';

type Program = {
    id: number;
    name: string;
    slug: string;
    categories: string[] | null;
    url: string;
    search_template: string | null;
    hotel_search_template: string | null;
    description: string | null;
    active: boolean;
    sort: number;
};

export default function AffiliateForm({ program, categoryLabels }: { program: Program | null; categoryLabels: Record<string, string> }) {
    const form = useForm({
        name: program?.name ?? '',
        slug: program?.slug ?? '',
        categories: program?.categories ?? ([] as string[]),
        url: program?.url ?? '',
        search_template: program?.search_template ?? '',
        hotel_search_template: program?.hotel_search_template ?? '',
        description: program?.description ?? '',
        active: program?.active ?? false,
        sort: program?.sort ?? 100,
    });

    const toggle = (category: string, checked: boolean) =>
        form.setData('categories', checked ? [...form.data.categories, category] : form.data.categories.filter((c) => c !== category));

    const submit = (event: React.FormEvent) => {
        event.preventDefault();
        if (program) {
            form.put(AffiliateController.update.url(program.id), { preserveScroll: true });
        } else {
            form.post(AffiliateController.store.url());
        }
    };

    return (
        <>
            <Head title={program ? `Edit ${program.name}` : 'New program'} />
            <form onSubmit={submit} className="max-w-3xl space-y-6 p-4">
                <PageHeader title={program ? `Edit ${program.name}` : 'New program'} />

                <div className="grid gap-4 sm:grid-cols-2">
                    <Field label="Name" htmlFor="name" error={form.errors.name}>
                        <Input id="name" value={form.data.name} onChange={(e) => form.setData('name', e.target.value)} required />
                    </Field>
                    <Field label="Slug" htmlFor="slug" error={form.errors.slug} hint="Leave empty to generate from the name.">
                        <Input id="slug" value={form.data.slug} onChange={(e) => form.setData('slug', e.target.value)} />
                    </Field>
                    <Field label="Travelpayouts short link" htmlFor="url" error={form.errors.url} hint="e.g. https://klook.tpk.ro/8LWW9OvA. Required for an active program." className="sm:col-span-2">
                        <Input id="url" value={form.data.url} onChange={(e) => form.setData('url', e.target.value)} />
                    </Field>
                    <Field label="Description" htmlFor="description" error={form.errors.description} className="sm:col-span-2">
                        <Input id="description" value={form.data.description} onChange={(e) => form.setData('description', e.target.value)} />
                    </Field>
                    <Field label="Search link template" htmlFor="search_template" error={form.errors.search_template} hint="Partner search page with {query} where the search term goes. Used for tour/ticket searches." className="sm:col-span-2">
                        <textarea id="search_template" className={textareaClass} rows={2} value={form.data.search_template} onChange={(e) => form.setData('search_template', e.target.value)} />
                    </Field>
                    <Field label="Hotel search link template" htmlFor="hotel_search_template" error={form.errors.hotel_search_template} hint="Optional. Used instead of the search template for hotel links (e.g. the Hotels tab)." className="sm:col-span-2">
                        <textarea id="hotel_search_template" className={textareaClass} rows={2} value={form.data.hotel_search_template} onChange={(e) => form.setData('hotel_search_template', e.target.value)} />
                    </Field>
                    <Field label="Sort order" htmlFor="sort" error={form.errors.sort} hint="Lower numbers come first.">
                        <Input id="sort" type="number" min={0} value={form.data.sort} onChange={(e) => form.setData('sort', Number(e.target.value))} />
                    </Field>
                </div>

                <fieldset className="space-y-2">
                    <legend className="text-sm font-medium">Categories</legend>
                    <div className="grid gap-2 sm:grid-cols-3">
                        {Object.entries(categoryLabels).map(([key, label]) => (
                            <label key={key} className="flex items-center gap-2 text-sm">
                                <Checkbox checked={form.data.categories.includes(key)} onCheckedChange={(checked) => toggle(key, checked === true)} />
                                {label}
                            </label>
                        ))}
                    </div>
                    {form.errors.categories && <p className="text-sm text-red-600">{form.errors.categories}</p>}
                </fieldset>

                <label className="flex items-center gap-2 text-sm">
                    <Checkbox checked={form.data.active} onCheckedChange={(checked) => form.setData('active', checked === true)} />
                    Active (links are shown on the website)
                </label>

                <div className="flex items-center justify-between">
                    <div className="flex gap-2">
                        <Button type="submit" disabled={form.processing}>Save</Button>
                        <Button type="button" variant="outline" asChild><Link href={AffiliateController.index.url()}>Back</Link></Button>
                    </div>
                    {program && <DeleteButton name={program.name} url={AffiliateController.destroy.url(program.id)} />}
                </div>
            </form>
        </>
    );
}
