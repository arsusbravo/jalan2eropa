import { Head, Link, useForm } from '@inertiajs/react';
import AffiliateLinkController from '@/actions/App/Http/Controllers/Admin/AffiliateLinkController';
import { DeleteButton } from '@/components/admin/delete-button';
import { Field, selectClass } from '@/components/admin/field';
import { PageHeader } from '@/components/admin/page-header';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import type { Option } from '@/types/admin';

type LinkRow = {
    id: number;
    affiliate_id: number;
    country_id: number | null;
    city_id: number | null;
    category: string;
    kind: string;
    label: string;
    sort: number;
    query: string | null;
    url: string | null;
};

type Place = { id: number; name: string; country_id: number | null };

export default function AffiliateLinkForm({
    link,
    programs,
    countries,
    places,
    categories,
}: {
    link: LinkRow | null;
    programs: Option[];
    countries: Option[];
    places: Place[];
    categories: Record<string, string>;
}) {
    const form = useForm({
        affiliate_id: link?.affiliate_id ?? ('' as number | ''),
        country_id: link?.country_id ?? ('' as number | ''),
        city_id: link?.city_id ?? ('' as number | ''),
        category: link?.category ?? 'tour',
        kind: link?.kind ?? 'city',
        label: link?.label ?? '',
        sort: link?.sort ?? 0,
        query: link?.query ?? '',
        url: link?.url ?? '',
    });

    const visiblePlaces = places.filter((place) => !form.data.country_id || place.country_id === form.data.country_id);

    const submit = (event: React.FormEvent) => {
        event.preventDefault();
        if (link) {
            form.put(AffiliateLinkController.update.url(link.id), { preserveScroll: true });
        } else {
            form.post(AffiliateLinkController.store.url());
        }
    };

    return (
        <>
            <Head title={link ? `Edit ${link.label}` : 'New link'} />
            <form onSubmit={submit} className="max-w-3xl space-y-6 p-4">
                <PageHeader title={link ? `Edit ${link.label}` : 'New link'} />

                <div className="grid gap-4 sm:grid-cols-2">
                    <Field label="Program" htmlFor="affiliate_id" error={form.errors.affiliate_id}>
                        <select id="affiliate_id" className={selectClass} value={form.data.affiliate_id} onChange={(e) => form.setData('affiliate_id', e.target.value ? Number(e.target.value) : '')} required>
                            <option value="">Select a program…</option>
                            {programs.map((p) => <option key={p.id} value={p.id}>{p.name}</option>)}
                        </select>
                    </Field>
                    <Field label="Category" htmlFor="category" error={form.errors.category}>
                        <select id="category" className={selectClass} value={form.data.category} onChange={(e) => form.setData('category', e.target.value)}>
                            {Object.entries(categories).map(([value, label]) => <option key={value} value={value}>{label}</option>)}
                        </select>
                    </Field>
                    <Field label="Kind" htmlFor="kind" error={form.errors.kind}>
                        <select id="kind" className={selectClass} value={form.data.kind} onChange={(e) => form.setData('kind', e.target.value)}>
                            <option value="city">City</option>
                            <option value="attraction">Attraction</option>
                        </select>
                    </Field>
                    <Field label="Label" htmlFor="label" error={form.errors.label} hint="Cards with the same label are grouped, e.g. “Brussels”.">
                        <Input id="label" value={form.data.label} onChange={(e) => form.setData('label', e.target.value)} required />
                    </Field>
                    <Field label="Country" htmlFor="country_id" error={form.errors.country_id}>
                        <select id="country_id" className={selectClass} value={form.data.country_id} onChange={(e) => form.setData('country_id', e.target.value ? Number(e.target.value) : '')}>
                            <option value="">None</option>
                            {countries.map((c) => <option key={c.id} value={c.id}>{c.name}</option>)}
                        </select>
                    </Field>
                    <Field label="Place (for attractions)" htmlFor="city_id" error={form.errors.city_id} hint="Shows this link on that place’s page.">
                        <select id="city_id" className={selectClass} value={form.data.city_id} onChange={(e) => form.setData('city_id', e.target.value ? Number(e.target.value) : '')}>
                            <option value="">None</option>
                            {visiblePlaces.map((p) => <option key={p.id} value={p.id}>{p.name}</option>)}
                        </select>
                    </Field>
                    <Field label="Search query" htmlFor="query" error={form.errors.query} hint="Filled into the program’s search template, e.g. “Atomium Brussels”." className="sm:col-span-2">
                        <Input id="query" value={form.data.query} onChange={(e) => form.setData('query', e.target.value)} />
                    </Field>
                    <Field label="Or full page URL" htmlFor="url" error={form.errors.url} hint="A specific partner page. Takes priority over the query." className="sm:col-span-2">
                        <Input id="url" value={form.data.url} onChange={(e) => form.setData('url', e.target.value)} />
                    </Field>
                    <Field label="Sort order" htmlFor="sort" error={form.errors.sort}>
                        <Input id="sort" type="number" min={0} value={form.data.sort} onChange={(e) => form.setData('sort', Number(e.target.value))} />
                    </Field>
                </div>

                <div className="flex items-center justify-between">
                    <div className="flex gap-2">
                        <Button type="submit" disabled={form.processing}>Save</Button>
                        <Button type="button" variant="outline" asChild><Link href={AffiliateLinkController.index.url()}>Back</Link></Button>
                    </div>
                    {link && <DeleteButton name={link.label} url={AffiliateLinkController.destroy.url(link.id)} />}
                </div>
            </form>
        </>
    );
}
