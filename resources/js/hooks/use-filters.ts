import { router } from '@inertiajs/react';
import { useEffect, useRef, useState } from 'react';

/**
 * Keep list filters in the query string. Text changes are debounced.
 */
export function useFilters<T extends Record<string, string | number | null>>(
    url: string,
    initial: T,
) {
    const [filters, setFilters] = useState<T>(initial);
    const first = useRef(true);

    useEffect(() => {
        if (first.current) {
            first.current = false;
            return;
        }

        const timer = setTimeout(() => {
            const query = Object.fromEntries(
                Object.entries(filters).filter(
                    ([, value]) => value !== '' && value !== null,
                ),
            );
            router.get(url, query, {
                preserveState: true,
                replace: true,
                preserveScroll: true,
            });
        }, 300);

        return () => clearTimeout(timer);
    }, [filters, url]);

    return [filters, (patch: Partial<T>) => setFilters((prev) => ({ ...prev, ...patch }))] as const;
}
