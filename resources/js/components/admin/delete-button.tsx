import { router } from '@inertiajs/react';
import { Trash2 } from 'lucide-react';
import { useState } from 'react';
import { Button } from '@/components/ui/button';
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
} from '@/components/ui/dialog';

export function DeleteButton({
    url,
    name,
    iconOnly = false,
}: {
    url: string;
    name: string;
    iconOnly?: boolean;
}) {
    const [open, setOpen] = useState(false);
    const [busy, setBusy] = useState(false);

    return (
        <>
            <Button
                type="button"
                variant={iconOnly ? 'ghost' : 'outline'}
                size={iconOnly ? 'icon' : 'default'}
                className="text-destructive hover:text-destructive"
                aria-label={`Delete ${name}`}
                onClick={() => setOpen(true)}
            >
                <Trash2 /> {!iconOnly && 'Delete'}
            </Button>
            <Dialog open={open} onOpenChange={setOpen}>
                <DialogContent>
                    <DialogHeader>
                        <DialogTitle>Delete “{name}”?</DialogTitle>
                        <DialogDescription>
                            This cannot be undone.
                        </DialogDescription>
                    </DialogHeader>
                    <DialogFooter>
                        <Button variant="outline" onClick={() => setOpen(false)}>
                            Cancel
                        </Button>
                        <Button
                            variant="destructive"
                            disabled={busy}
                            onClick={() =>
                                router.delete(url, {
                                    onStart: () => setBusy(true),
                                    onFinish: () => {
                                        setBusy(false);
                                        setOpen(false);
                                    },
                                })
                            }
                        >
                            Delete
                        </Button>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </>
    );
}
