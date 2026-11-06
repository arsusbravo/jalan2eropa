import { Link } from '@inertiajs/react';
import { Plus } from 'lucide-react';
import type { ReactNode } from 'react';
import { Button } from '@/components/ui/button';

export function PageHeader({
    title,
    description,
    createHref,
    createLabel = 'New',
    children,
}: {
    title: string;
    description?: string;
    createHref?: string;
    createLabel?: string;
    children?: ReactNode;
}) {
    return (
        <div className="flex flex-wrap items-start justify-between gap-3">
            <div className="space-y-0.5">
                <h1 className="text-xl font-semibold tracking-tight">
                    {title}
                </h1>
                {description && (
                    <p className="text-sm text-muted-foreground">
                        {description}
                    </p>
                )}
            </div>
            <div className="flex items-center gap-2">
                {children}
                {createHref && (
                    <Button asChild>
                        <Link href={createHref}>
                            <Plus /> {createLabel}
                        </Link>
                    </Button>
                )}
            </div>
        </div>
    );
}
