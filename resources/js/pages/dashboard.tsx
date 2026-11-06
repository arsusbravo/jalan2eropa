import { Head, Link } from '@inertiajs/react';
import { FileText, Globe, Handshake, Link2, MapPin } from 'lucide-react';
import AffiliateController from '@/actions/App/Http/Controllers/Admin/AffiliateController';
import AffiliateLinkController from '@/actions/App/Http/Controllers/Admin/AffiliateLinkController';
import ContentController from '@/actions/App/Http/Controllers/Admin/ContentController';
import CountryController from '@/actions/App/Http/Controllers/Admin/CountryController';
import PlaceController from '@/actions/App/Http/Controllers/Admin/PlaceController';
import { dashboard } from '@/routes';

type Stats = { countries: number; places: number; content: number; programs: number; links: number };

export default function Dashboard({ stats }: { stats: Stats }) {
    const cards = [
        { title: 'Countries', value: stats.countries, href: CountryController.index.url(), icon: Globe },
        { title: 'Places', value: stats.places, href: PlaceController.index.url(), icon: MapPin },
        { title: 'Content pages', value: stats.content, href: ContentController.index.url(), icon: FileText },
        { title: 'Active affiliate programs', value: stats.programs, href: AffiliateController.index.url(), icon: Handshake },
        { title: 'Affiliate links', value: stats.links, href: AffiliateLinkController.index.url(), icon: Link2 },
    ];

    return (
        <>
            <Head title="Dashboard" />
            <div className="space-y-4 p-4">
                <div className="space-y-0.5">
                    <h1 className="text-xl font-semibold tracking-tight">Dashboard</h1>
                    <p className="text-sm text-muted-foreground">Manage the Jalan2Eropa website.</p>
                </div>
                <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    {cards.map((card) => (
                        <Link key={card.title} href={card.href} className="flex items-center gap-4 rounded-xl border p-5 transition-colors hover:bg-muted/50">
                            <span className="grid size-11 place-items-center rounded-lg bg-muted"><card.icon className="size-5" /></span>
                            <span>
                                <span className="block text-2xl font-semibold">{card.value}</span>
                                <span className="text-sm text-muted-foreground">{card.title}</span>
                            </span>
                        </Link>
                    ))}
                </div>
            </div>
        </>
    );
}

Dashboard.layout = {
    breadcrumbs: [
        {
            title: 'Dashboard',
            href: dashboard(),
        },
    ],
};
