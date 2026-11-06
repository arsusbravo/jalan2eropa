import { Head, InfiniteScroll, Link } from '@inertiajs/react';
import { Pencil } from 'lucide-react';
import ContentController from '@/actions/App/Http/Controllers/Admin/ContentController';
import { DeleteButton } from '@/components/admin/delete-button';
import { PageHeader } from '@/components/admin/page-header';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { useFilters } from '@/hooks/use-filters';
import type { Paginated } from '@/types/admin';

type Row = { id: number; title: string; slug: string; type: string; is_tip: boolean; updated_at: string | null };

export default function ContentIndex({ items, filters: initial }: { items: Paginated<Row>; filters: { q: string } }) {
    const [filters, setFilters] = useFilters(ContentController.index.url(), initial);

    return (
        <>
            <Head title="Content" />
            <div className="space-y-4 p-4">
                <PageHeader title="Content" description="Tips and info pages." createHref={ContentController.create.url()} createLabel="New page" />
                <Input className="max-w-xs" placeholder="Search pages…" value={filters.q} onChange={(e) => setFilters({ q: e.target.value })} />
                <div className="overflow-x-auto rounded-xl border">
                    <table className="w-full text-sm">
                        <thead className="bg-muted/50 text-left text-xs text-muted-foreground uppercase">
                            <tr><th className="p-3">Title</th><th className="p-3">Slug</th><th className="p-3">Updated</th><th className="p-3 text-right">Actions</th></tr>
                        </thead>
                        <InfiniteScroll data="items" as="tbody" className="divide-y">
                            {items.data.map((item) => (
                                <tr key={item.id}>
                                    <td className="p-3">
                                        <Link href={ContentController.edit.url(item.id)} className="font-medium hover:underline">{item.title}</Link>
                                        {item.is_tip && <Badge variant="secondary" className="ml-2">Tips page</Badge>}
                                    </td>
                                    <td className="p-3 text-muted-foreground">{item.slug}</td>
                                    <td className="p-3 text-muted-foreground">{item.updated_at ?? '–'}</td>
                                    <td className="p-3">
                                        <div className="flex justify-end gap-1">
                                            <Button variant="ghost" size="icon" asChild>
                                                <Link href={ContentController.edit.url(item.id)} aria-label={`Edit ${item.title}`}><Pencil /></Link>
                                            </Button>
                                            {!item.is_tip && <DeleteButton iconOnly name={item.title} url={ContentController.destroy.url(item.id)} />}
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

ContentIndex.layout = { breadcrumbs: [{ title: 'Content', href: ContentController.index.url() }] };
