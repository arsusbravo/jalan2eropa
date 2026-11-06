import { Head, Link } from '@inertiajs/react';
import { Pencil } from 'lucide-react';
import AffiliateController from '@/actions/App/Http/Controllers/Admin/AffiliateController';
import { DeleteButton } from '@/components/admin/delete-button';
import { PageHeader } from '@/components/admin/page-header';
import { Badge } from '@/components/ui/badge';
import { Button } from '@/components/ui/button';

type Program = { id: number; name: string; categories: string[]; url: string; active: boolean; has_search: boolean; links_count: number };

export default function AffiliatesIndex({ programs, categoryLabels }: { programs: Program[]; categoryLabels: Record<string, string> }) {
    return (
        <>
            <Head title="Affiliate programs" />
            <div className="space-y-4 p-4">
                <PageHeader title="Affiliate programs" description="Travelpayouts programs. Only active programs with a short link appear on the website." createHref={AffiliateController.create.url()} createLabel="New program" />
                <div className="overflow-x-auto rounded-xl border">
                    <table className="w-full text-sm">
                        <thead className="bg-muted/50 text-left text-xs text-muted-foreground uppercase">
                            <tr><th className="p-3">Program</th><th className="p-3">Categories</th><th className="p-3">Search</th><th className="p-3">Links</th><th className="p-3">Status</th><th className="p-3 text-right">Actions</th></tr>
                        </thead>
                        <tbody className="divide-y">
                            {programs.map((program) => (
                                <tr key={program.id}>
                                    <td className="p-3">
                                        <Link href={AffiliateController.edit.url(program.id)} className="font-medium hover:underline">{program.name}</Link>
                                        <p className="text-xs text-muted-foreground">{program.url || 'No short link yet'}</p>
                                    </td>
                                    <td className="p-3">
                                        <div className="flex flex-wrap gap-1">
                                            {program.categories.map((category) => <Badge key={category} variant="outline">{categoryLabels[category] ?? category}</Badge>)}
                                        </div>
                                    </td>
                                    <td className="p-3">{program.has_search ? 'Yes' : '–'}</td>
                                    <td className="p-3">{program.links_count}</td>
                                    <td className="p-3"><Badge variant={program.active ? 'default' : 'secondary'}>{program.active ? 'Active' : 'Off'}</Badge></td>
                                    <td className="p-3">
                                        <div className="flex justify-end gap-1">
                                            <Button variant="ghost" size="icon" asChild>
                                                <Link href={AffiliateController.edit.url(program.id)} aria-label={`Edit ${program.name}`}><Pencil /></Link>
                                            </Button>
                                            <DeleteButton iconOnly name={program.name} url={AffiliateController.destroy.url(program.id)} />
                                        </div>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </>
    );
}

AffiliatesIndex.layout = { breadcrumbs: [{ title: 'Affiliate programs', href: AffiliateController.index.url() }] };
