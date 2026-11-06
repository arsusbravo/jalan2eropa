import { Link } from '@inertiajs/react';
import { ExternalLink, FileText, Globe, Handshake, LayoutGrid, Link2, MapPin } from 'lucide-react';
import AffiliateController from '@/actions/App/Http/Controllers/Admin/AffiliateController';
import AffiliateLinkController from '@/actions/App/Http/Controllers/Admin/AffiliateLinkController';
import ContentController from '@/actions/App/Http/Controllers/Admin/ContentController';
import CountryController from '@/actions/App/Http/Controllers/Admin/CountryController';
import PlaceController from '@/actions/App/Http/Controllers/Admin/PlaceController';
import AppLogo from '@/components/app-logo';
import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { dashboard, home } from '@/routes';
import type { NavItem } from '@/types';

const mainNavItems: NavItem[] = [
    {
        title: 'Dashboard',
        href: dashboard(),
        icon: LayoutGrid,
    },
    { title: 'Countries', href: CountryController.index.url(), icon: Globe },
    { title: 'Places', href: PlaceController.index.url(), icon: MapPin },
    { title: 'Content', href: ContentController.index.url(), icon: FileText },
    { title: 'Affiliate programs', href: AffiliateController.index.url(), icon: Handshake },
    { title: 'Affiliate links', href: AffiliateLinkController.index.url(), icon: Link2 },
];

const footerNavItems: NavItem[] = [
    {
        title: 'Lihat website',
        href: home(),
        icon: ExternalLink,
    },
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href={dashboard()} prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain items={mainNavItems} />
            </SidebarContent>

            <SidebarFooter>
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    );
}
