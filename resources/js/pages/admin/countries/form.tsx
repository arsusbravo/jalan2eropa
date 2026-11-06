import { Head, Link, useForm } from '@inertiajs/react';
import { ExternalLink } from 'lucide-react';
import CountryController from '@/actions/App/Http/Controllers/Admin/CountryController';
import { DeleteButton } from '@/components/admin/delete-button';
import { Field } from '@/components/admin/field';
import { PageHeader } from '@/components/admin/page-header';
import { RichTextEditor } from '@/components/admin/rich-text-editor';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';

type Country = {
    id: number;
    name: string;
    title: string;
    slug: string;
    international: string;
    codes: string;
    latitude: string;
    longitude: string;
    keywords: string;
    description: string;
    short_desc: string;
    to_see: string;
    eatdrink: string;
    shopping: string;
    others: string;
    active: boolean;
    photo_url: string | null;
    public_url: string;
};

const sections = [
    ['description', 'Introduction'],
    ['short_desc', 'Short description'],
    ['to_see', 'What to see'],
    ['eatdrink', 'Food & drink'],
    ['shopping', 'Shopping'],
    ['others', 'Other information'],
] as const;

export default function CountryForm({ country }: { country: Country | null }) {
    const form = useForm({
        _method: country ? 'put' : 'post',
        name: country?.name ?? '',
        title: country?.title ?? '',
        slug: country?.slug ?? '',
        international: country?.international ?? '',
        codes: country?.codes ?? '',
        latitude: country?.latitude ?? '',
        longitude: country?.longitude ?? '',
        keywords: country?.keywords ?? '',
        description: country?.description ?? '',
        short_desc: country?.short_desc ?? '',
        to_see: country?.to_see ?? '',
        eatdrink: country?.eatdrink ?? '',
        shopping: country?.shopping ?? '',
        others: country?.others ?? '',
        active: country?.active ?? true,
        photo: null as File | null,
    });

    const submit = (event: React.FormEvent) => {
        event.preventDefault();
        form.post(country ? CountryController.update.url(country.id) : CountryController.store.url(), { forceFormData: true, preserveScroll: true });
    };

    return (
        <>
            <Head title={country ? `Edit ${country.name}` : 'New country'} />
            <form onSubmit={submit} className="max-w-4xl space-y-6 p-4">
                <PageHeader title={country ? `Edit ${country.name}` : 'New country'}>
                    {country && (
                        <Button type="button" variant="outline" asChild>
                            <a href={country.public_url} target="_blank" rel="noopener noreferrer"><ExternalLink /> View on website</a>
                        </Button>
                    )}
                </PageHeader>

                <div className="grid gap-4 sm:grid-cols-2">
                    <Field label="Name" htmlFor="name" error={form.errors.name}>
                        <Input id="name" value={form.data.name} onChange={(e) => form.setData('name', e.target.value)} required />
                    </Field>
                    <Field label="Slug" htmlFor="slug" error={form.errors.slug} hint="Part of the public address. Leave empty to generate from the name.">
                        <Input id="slug" value={form.data.slug} onChange={(e) => form.setData('slug', e.target.value)} />
                    </Field>
                    <Field label="Page title" htmlFor="title" error={form.errors.title} className="sm:col-span-2">
                        <Input id="title" value={form.data.title} onChange={(e) => form.setData('title', e.target.value)} />
                    </Field>
                    <Field label="International name" htmlFor="international" error={form.errors.international} hint="English name, used for partner searches.">
                        <Input id="international" value={form.data.international} onChange={(e) => form.setData('international', e.target.value)} />
                    </Field>
                    <Field label="Country code" htmlFor="codes" error={form.errors.codes} hint="Two letters, e.g. nl. Picks the flag.">
                        <Input id="codes" maxLength={2} value={form.data.codes} onChange={(e) => form.setData('codes', e.target.value)} required />
                    </Field>
                    <Field label="Latitude" htmlFor="latitude" error={form.errors.latitude}>
                        <Input id="latitude" value={form.data.latitude} onChange={(e) => form.setData('latitude', e.target.value)} />
                    </Field>
                    <Field label="Longitude" htmlFor="longitude" error={form.errors.longitude}>
                        <Input id="longitude" value={form.data.longitude} onChange={(e) => form.setData('longitude', e.target.value)} />
                    </Field>
                    <Field label="Keywords" htmlFor="keywords" error={form.errors.keywords} className="sm:col-span-2">
                        <Input id="keywords" value={form.data.keywords} onChange={(e) => form.setData('keywords', e.target.value)} />
                    </Field>
                    <Field label="Photo (JPG)" htmlFor="photo" error={form.errors.photo} hint="Shown in the country hero and cards." className="sm:col-span-2">
                        <div className="flex items-center gap-4">
                            {country?.photo_url && <img src={country.photo_url} alt="" className="h-16 w-24 rounded-md object-cover" />}
                            <Input id="photo" type="file" accept="image/jpeg" onChange={(e) => form.setData('photo', e.target.files?.[0] ?? null)} />
                        </div>
                    </Field>
                    <label className="flex items-center gap-2 text-sm sm:col-span-2">
                        <Checkbox checked={form.data.active} onCheckedChange={(checked) => form.setData('active', checked === true)} />
                        Active (visible on the website)
                    </label>
                </div>

                {sections.map(([key, label]) => (
                    <Field key={key} label={label} error={form.errors[key]}>
                        <RichTextEditor value={form.data[key]} onChange={(html) => form.setData(key, html)} />
                    </Field>
                ))}

                <div className="flex items-center justify-between">
                    <div className="flex gap-2">
                        <Button type="submit" disabled={form.processing}>Save</Button>
                        <Button type="button" variant="outline" asChild><Link href={CountryController.index.url()}>Back</Link></Button>
                    </div>
                    {country && <DeleteButton name={country.name} url={CountryController.destroy.url(country.id)} />}
                </div>
            </form>
        </>
    );
}
