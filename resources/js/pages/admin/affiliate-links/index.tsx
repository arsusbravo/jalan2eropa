import { Head, InfiniteScroll, Link } from '@inertiajs/react';
import { ExternalLink, Pencil } from 'lucide-react';
import AffiliateLinkController from '@/actions/App/Http/Controllers/Admin/AffiliateLinkController';
import { DeleteButton } from '@/components/admin/delete-button';
import { selectClass } from '@/components/admin/field';
import { PageHeader } from '@/components/admin/page-header';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { useFilters } from '@/hooks/use-filters';
import type { Option, Paginated } from '@/types/admin';

type Row = { id: number; label: string; kind: string; category: string; program: string | null; country: string | null; destination: string | null; test_url: string | null };

export default function AffiliateLinksIndex({
    links,
    programs,
    countries,
    filters: initial,
}: {
    links: Paginated<Row>;
    programs: Option[];
    countries: Option[];
    filters: { q: string; affiliate_id: number | null; country_id: number | null; kind: string };
}) {
    const [filters, setFilters] = useFilters(AffiliateLinkController.index.url(), initial);

    return (
        <>
            <Head title="Affiliate links" />
            <div className="space-y-4 p-4">
                <PageHeader title="Affiliate links" description="Curated city and attraction pages per partner. Use the test button to check a link." createHref={AffiliateLinkController.create.url()} createLabel="New link" />
                <div className="flex flex-wrap gap-2">
                    <Input className="max-w-xs" placeholder="Search by city or attraction…" value={filters.q} onChange={(e) => setFilters({ q: e.target.value })} />
                    <select className={`${selectClass} max-w-44`} value={filters.affiliate_id ?? ''} onChange={(e) => setFilters({ affiliate_id: e.target.value ? Number(e.target.value) : null })} aria-label="Program">
                        <option value="">All programs</option>
                        {programs.map((p) => <option key={p.id} value={p.id}>{p.name}</option>)}
                    </select>
                    <select className={`${selectClass} max-w-44`} value={filters.country_id ?? ''} onChange={(e) => setFilters({ country_id: e.target.value ? Number(e.target.value) : null })} aria-label="Country">
                        <option value="">All countries</option>
                        {countries.map((c) => <option key={c.id} value={c.id}>{c.name}</option>)}
                    </select>
                    <select className={`${selectClass} max-w-44`} value={filters.kind} onChange={(e) => setFilters({ kind: e.target.value })} aria-label="Kind">
                        <option value="">City and attraction</option>
                        <option value="city">Cities</option>
                        <option value="attraction">Attractions</option>
                    </select>
                </div>
                <div className="overflow-x-auto rounded-xl border">
                    <table className="w-full text-sm">
                        <thead className="bg-muted/50 text-left text-xs text-muted-foreground uppercase">
                            <tr><th className="p-3">Label</th><th className="p-3">Program</th><th className="p-3">Country</th><th className="p-3">Destination</th><th className="p-3 text-right">Actions</th></tr>
                        </thead>
                        <InfiniteScroll data="links" as="tbody" className="divide-y">
                            {links.data.map((link) => (
                                <tr key={link.id}>
                                    <td className="p-3">
                                        <Link href={AffiliateLinkController.edit.url(link.id)} className="font-medium hover:underline">{link.label}</Link>
                                        <Badge variant="outline" className="ml-2">{link.kind}</Badge>
                                    </td>
                                    <td className="p-3">{link.program}</td>
                                    <td className="p-3">{link.country ?? '–'}</td>
                                    <td className="max-w-xs truncate p-3 text-xs text-muted-foreground" title={link.destination ?? ''}>{link.destination}</td>
                                    <td className="p-3">
                                        <div className="flex justify-end gap-1">
                                            {link.test_url && (
                                                <Button variant="ghost" size="icon" asChild>
                                                    <a href={link.test_url} target="_blank" rel="noopener noreferrer" aria-label={`Test ${link.label} at ${link.program}`}><ExternalLink /></a>
                                                </Button>
                                            )}
                                            <Button variant="ghost" size="icon" asChild>
                                                <Link href={AffiliateLinkController.edit.url(link.id)} aria-label={`Edit ${link.label}`}><Pencil /></Link>
                                            </Button>
                                            <DeleteButton iconOnly name={`${link.label} (${link.program})`} url={AffiliateLinkController.destroy.url(link.id)} />
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

AffiliateLinksIndex.layout = { breadcrumbs: [{ title: 'Affiliate links', href: AffiliateLinkController.index.url() }] };
