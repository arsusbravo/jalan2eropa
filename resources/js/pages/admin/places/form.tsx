import { Head, Link, useForm } from '@inertiajs/react';
import { ExternalLink } from 'lucide-react';
import PlaceController from '@/actions/App/Http/Controllers/Admin/PlaceController';
import { DeleteButton } from '@/components/admin/delete-button';
import { Field, selectClass, textareaClass } from '@/components/admin/field';
import { PageHeader } from '@/components/admin/page-header';
import { RichTextEditor } from '@/components/admin/rich-text-editor';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import type { Option } from '@/types/admin';

type Place = {
    id: number;
    country_id: number;
    name: string;
    slug: string;
    search_term: string | null;
    type: string;
    latitude: string;
    longitude: string;
    hotels: string;
    youtube: string;
    attractions: string;
    address: string;
    thumb_url: string | null;
    public_url: string | null;
};

export default function PlaceForm({ place, countries, types }: { place: Place | null; countries: Option[]; types: Record<string, string> }) {
    const form = useForm({
        _method: place ? 'put' : 'post',
        country_id: place?.country_id ?? ('' as number | ''),
        name: place?.name ?? '',
        slug: place?.slug ?? '',
        search_term: place?.search_term ?? '',
        type: place?.type ?? 'tourist',
        latitude: place?.latitude ?? '',
        longitude: place?.longitude ?? '',
        hotels: place?.hotels ?? '',
        youtube: place?.youtube ?? '',
        attractions: place?.attractions ?? '',
        address: place?.address ?? '',
        thumb_file: null as File | null,
    });

    const submit = (event: React.FormEvent) => {
        event.preventDefault();
        form.post(place ? PlaceController.update.url(place.id) : PlaceController.store.url(), { forceFormData: true, preserveScroll: true });
    };

    return (
        <>
            <Head title={place ? `Edit ${place.name}` : 'New place'} />
            <form onSubmit={submit} className="max-w-4xl space-y-6 p-4">
                <PageHeader title={place ? `Edit ${place.name}` : 'New place'}>
                    {place?.public_url && (
                        <Button type="button" variant="outline" asChild>
                            <a href={place.public_url} target="_blank" rel="noopener noreferrer"><ExternalLink /> View on website</a>
                        </Button>
                    )}
                </PageHeader>

                <div className="grid gap-4 sm:grid-cols-2">
                    <Field label="Name" htmlFor="name" error={form.errors.name}>
                        <Input id="name" value={form.data.name} onChange={(e) => form.setData('name', e.target.value)} required />
                    </Field>
                    <Field label="Slug" htmlFor="slug" error={form.errors.slug} hint="Leave empty to generate from the name.">
                        <Input id="slug" value={form.data.slug} onChange={(e) => form.setData('slug', e.target.value)} />
                    </Field>
                    <Field label="Country" htmlFor="country_id" error={form.errors.country_id}>
                        <select id="country_id" className={selectClass} value={form.data.country_id} onChange={(e) => form.setData('country_id', e.target.value ? Number(e.target.value) : '')} required>
                            <option value="">Select a country…</option>
                            {countries.map((c) => <option key={c.id} value={c.id}>{c.name}</option>)}
                        </select>
                    </Field>
                    <Field label="Type" htmlFor="type" error={form.errors.type}>
                        <select id="type" className={selectClass} value={form.data.type} onChange={(e) => form.setData('type', e.target.value)}>
                            {Object.entries(types).map(([value, label]) => <option key={value} value={value}>{label}</option>)}
                        </select>
                    </Field>
                    <Field label="Latitude" htmlFor="latitude" error={form.errors.latitude}>
                        <Input id="latitude" value={form.data.latitude} onChange={(e) => form.setData('latitude', e.target.value)} required />
                    </Field>
                    <Field label="Longitude" htmlFor="longitude" error={form.errors.longitude}>
                        <Input id="longitude" value={form.data.longitude} onChange={(e) => form.setData('longitude', e.target.value)} required />
                    </Field>
                    <Field label="English search name" htmlFor="search_term" error={form.errors.search_term} hint="Used for ticket and tour searches at partners, e.g. “Atomium Brussels”. Without it, no ticket links are shown." className="sm:col-span-2">
                        <Input id="search_term" value={form.data.search_term} onChange={(e) => form.setData('search_term', e.target.value)} />
                    </Field>
                    <Field label="YouTube embed URL" htmlFor="youtube" error={form.errors.youtube} className="sm:col-span-2">
                        <Input id="youtube" placeholder="https://www.youtube.com/embed/…" value={form.data.youtube} onChange={(e) => form.setData('youtube', e.target.value)} />
                    </Field>
                    <Field label="Address" htmlFor="address" error={form.errors.address} className="sm:col-span-2">
                        <textarea id="address" className={textareaClass} value={form.data.address} onChange={(e) => form.setData('address', e.target.value)} />
                    </Field>
                    <Field label="Thumbnail" htmlFor="thumb_file" error={form.errors.thumb_file} hint="JPG, PNG or WebP, max 4 MB." className="sm:col-span-2">
                        <div className="flex items-center gap-4">
                            {place?.thumb_url && <img src={place.thumb_url} alt="" className="h-16 w-24 rounded-md object-cover" />}
                            <Input id="thumb_file" type="file" accept="image/jpeg,image/png,image/webp" onChange={(e) => form.setData('thumb_file', e.target.files?.[0] ?? null)} />
                        </div>
                    </Field>
                </div>

                <Field label="Description" error={form.errors.attractions}>
                    <RichTextEditor value={form.data.attractions} onChange={(html) => form.setData('attractions', html)} />
                </Field>

                <div className="flex items-center justify-between">
                    <div className="flex gap-2">
                        <Button type="submit" disabled={form.processing}>Save</Button>
                        <Button type="button" variant="outline" asChild><Link href={PlaceController.index.url()}>Back</Link></Button>
                    </div>
                    {place && <DeleteButton name={place.name} url={PlaceController.destroy.url(place.id)} />}
                </div>
            </form>
        </>
    );
}
