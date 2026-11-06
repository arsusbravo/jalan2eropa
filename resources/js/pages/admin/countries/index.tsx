import { Head, InfiniteScroll, Link } from '@inertiajs/react';
import { ExternalLink, Pencil } from 'lucide-react';
import CountryController from '@/actions/App/Http/Controllers/Admin/CountryController';
import { DeleteButton } from '@/components/admin/delete-button';
import { PageHeader } from '@/components/admin/page-header';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { useFilters } from '@/hooks/use-filters';
import type { Paginated } from '@/types/admin';

type Row = {
    id: number;
    name: string;
    slug: string;
    active: boolean;
    places_count: number;
    flag_url: string;
    photo_url: string | null;
    public_url: string;
};

export default function CountriesIndex({
    countries,
    filters: initial,
}: {
    countries: Paginated<Row>;
    filters: { q: string };
}) {
    const [filters, setFilters] = useFilters(CountryController.index.url(), initial);

    return (
        <>
            <Head title="Countries" />
            <div className="space-y-4 p-4">
                <PageHeader
                    title="Countries"
                    description="Country guides shown on the public site."
                    createHref={CountryController.create.url()}
                    createLabel="New country"
                />
                <Input
                    className="max-w-xs"
                    placeholder="Search countries…"
                    value={filters.q}
                    onChange={(event) => setFilters({ q: event.target.value })}
                />
                <div className="overflow-x-auto rounded-xl border">
                    <table className="w-full text-sm">
                        <thead className="bg-muted/50 text-left text-xs text-muted-foreground uppercase">
                            <tr>
                                <th className="p-3">Country</th>
                                <th className="p-3">Places</th>
                                <th className="p-3">Status</th>
                                <th className="p-3 text-right">Actions</th>
                            </tr>
                        </thead>
                        <InfiniteScroll data="countries" as="tbody" className="divide-y">
                            {countries.data.map((country) => (
                                <tr key={country.id}>
                                    <td className="p-3">
                                        <div className="flex items-center gap-3">
                                            <img src={country.flag_url} alt="" className="h-5 w-7 rounded-sm object-cover" />
                                            <div>
                                                <Link href={CountryController.edit.url(country.id)} className="font-medium hover:underline">
                                                    {country.name}
                                                </Link>
                                                <p className="text-xs text-muted-foreground">/{country.slug}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td className="p-3">{country.places_count}</td>
                                    <td className="p-3">
                                        <Badge variant={country.active ? 'default' : 'secondary'}>
                                            {country.active ? 'Active' : 'Hidden'}
                                        </Badge>
                                    </td>
                                    <td className="p-3">
                                        <div className="flex justify-end gap-1">
                                            <Button variant="ghost" size="icon" asChild>
                                                <a href={country.public_url} target="_blank" rel="noopener noreferrer" aria-label={`View ${country.name} on the website`}>
                                                    <ExternalLink />
                                                </a>
                                            </Button>
                                            <Button variant="ghost" size="icon" asChild>
                                                <Link href={CountryController.edit.url(country.id)} aria-label={`Edit ${country.name}`}>
                                                    <Pencil />
                                                </Link>
                                            </Button>
                                            <DeleteButton iconOnly name={country.name} url={CountryController.destroy.url(country.id)} />
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

CountriesIndex.layout = { breadcrumbs: [{ title: 'Countries', href: CountryController.index.url() }] };
