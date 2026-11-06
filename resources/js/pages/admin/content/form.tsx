import { Head, Link, useForm } from '@inertiajs/react';
import ContentController from '@/actions/App/Http/Controllers/Admin/ContentController';
import { DeleteButton } from '@/components/admin/delete-button';
import { Field } from '@/components/admin/field';
import { PageHeader } from '@/components/admin/page-header';
import { RichTextEditor } from '@/components/admin/rich-text-editor';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';

type Item = { id: number; title: string; slug: string; type: string; content: string; is_tip: boolean };

export default function ContentForm({ item }: { item: Item | null }) {
    const form = useForm({
        title: item?.title ?? '',
        slug: item?.slug ?? '',
        type: item?.type ?? 'page',
        content: item?.content ?? '',
    });

    const submit = (event: React.FormEvent) => {
        event.preventDefault();
        if (item) {
            form.put(ContentController.update.url(item.id), { preserveScroll: true });
        } else {
            form.post(ContentController.store.url());
        }
    };

    return (
        <>
            <Head title={item ? `Edit ${item.title}` : 'New page'} />
            <form onSubmit={submit} className="max-w-4xl space-y-6 p-4">
                <PageHeader title={item ? `Edit ${item.title}` : 'New page'} />

                <div className="grid gap-4 sm:grid-cols-2">
                    <Field label="Title" htmlFor="title" error={form.errors.title}>
                        <Input id="title" value={form.data.title} onChange={(e) => form.setData('title', e.target.value)} required />
                    </Field>
                    <Field label="Slug" htmlFor="slug" error={form.errors.slug} hint={item?.is_tip ? 'Used by the public Tips section; it cannot be changed.' : undefined}>
                        <Input id="slug" value={form.data.slug} disabled={item?.is_tip} onChange={(e) => form.setData('slug', e.target.value)} required />
                    </Field>
                    <Field label="Type" htmlFor="type" error={form.errors.type}>
                        <Input id="type" value={form.data.type} onChange={(e) => form.setData('type', e.target.value)} required />
                    </Field>
                </div>

                <Field label="Content" error={form.errors.content}>
                    <RichTextEditor value={form.data.content} onChange={(html) => form.setData('content', html)} />
                </Field>

                <div className="flex items-center justify-between">
                    <div className="flex gap-2">
                        <Button type="submit" disabled={form.processing}>Save</Button>
                        <Button type="button" variant="outline" asChild><Link href={ContentController.index.url()}>Back</Link></Button>
                    </div>
                    {item && !item.is_tip && <DeleteButton name={item.title} url={ContentController.destroy.url(item.id)} />}
                </div>
            </form>
        </>
    );
}
