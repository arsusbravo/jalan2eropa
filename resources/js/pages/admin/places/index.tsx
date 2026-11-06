import { Head, InfiniteScroll, Link } from '@inertiajs/react';
import { ExternalLink, Pencil } from 'lucide-react';
import PlaceController from '@/actions/App/Http/Controllers/Admin/PlaceController';
import { DeleteButton } from '@/components/admin/delete-button';
import { selectClass } from '@/components/admin/field';
import { PageHeader } from '@/components/admin/page-header';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { useFilters } from '@/hooks/use-filters';
import type { Option, Paginated } from '@/types/admin';

type Row = { id: number; name: string; type: string; country: string | null; thumb_url: string | null; public_url: string | null };

export default function PlacesIndex({
    places,
    countries,
    types,
    filters: initial,
}: {
    places: Paginated<Row>;
    countries: Option[];
    types: Record<string, string>;
    filters: { q: string; country_id: number | null; type: string };
}) {
    const [filters, setFilters] = useFilters(PlaceController.index.url(), initial);

    return (
        <>
            <Head title="Places" />
            <div className="space-y-4 p-4">
                <PageHeader title="Places" description="Tourist places, airports, train stations and shopping spots." createHref={PlaceController.create.url()} createLabel="New place" />
                <div className="flex flex-wrap gap-2">
                    <Input className="max-w-xs" placeholder="Search places…" value={filters.q} onChange={(e) => setFilters({ q: e.target.value })} />
                    <select className={`${selectClass} max-w-48`} value={filters.country_id ?? ''} onChange={(e) => setFilters({ country_id: e.target.value ? Number(e.target.value) : null })} aria-label="Country">
                        <option value="">All countries</option>
                        {countries.map((c) => <option key={c.id} value={c.id}>{c.name}</option>)}
                    </select>
                    <select className={`${selectClass} max-w-48`} value={filters.type} onChange={(e) => setFilters({ type: e.target.value })} aria-label="Type">
                        <option value="">All types</option>
                        {Object.entries(types).map(([value, label]) => <option key={value} value={value}>{label}</option>)}
                    </select>
                </div>
                <div className="overflow-x-auto rounded-xl border">
                    <table className="w-full text-sm">
                        <thead className="bg-muted/50 text-left text-xs text-muted-foreground uppercase">
                            <tr><th className="p-3">Place</th><th className="p-3">Country</th><th className="p-3">Type</th><th className="p-3 text-right">Actions</th></tr>
                        </thead>
                        <InfiniteScroll data="places" as="tbody" className="divide-y">
                            {places.data.map((place) => (
                                <tr key={place.id}>
                                    <td className="p-3">
                                        <div className="flex items-center gap-3">
                                            {place.thumb_url ? <img src={place.thumb_url} alt="" className="size-9 rounded-md object-cover" /> : <span className="size-9 rounded-md bg-muted" />}
                                            <Link href={PlaceController.edit.url(place.id)} className="font-medium hover:underline">{place.name}</Link>
                                        </div>
                                    </td>
                                    <td className="p-3">{place.country}</td>
                                    <td className="p-3">{place.type}</td>
                                    <td className="p-3">
                                        <div className="flex justify-end gap-1">
                                            {place.public_url && (
                                                <Button variant="ghost" size="icon" asChild>
                                                    <a href={place.public_url} target="_blank" rel="noopener noreferrer" aria-label={`View ${place.name} on the website`}><ExternalLink /></a>
                                                </Button>
                                            )}
                                            <Button variant="ghost" size="icon" asChild>
                                                <Link href={PlaceController.edit.url(place.id)} aria-label={`Edit ${place.name}`}><Pencil /></Link>
                                            </Button>
                                            <DeleteButton iconOnly name={place.name} url={PlaceController.destroy.url(place.id)} />
                                        </div>
                                    </td>
                                </tr>
                            ))}
                        </InfiniteScroll>
                    </table>
                </div>
            </div>
        </>
    );
}

PlacesIndex.layout = { breadcrumbs: [{ title: 'Places', href: PlaceController.index.url() }] };
