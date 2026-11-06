import { EditorContent, useEditor } from '@tiptap/react';
import StarterKit from '@tiptap/starter-kit';
import {
    Bold,
    Code,
    Heading2,
    Heading3,
    Italic,
    Link2,
    List,
    ListOrdered,
    Redo2,
    Undo2,
} from 'lucide-react';
import { useState } from 'react';
import { Button } from '@/components/ui/button';
import { textareaClass } from '@/components/admin/field';
import { cn } from '@/lib/utils';

export function RichTextEditor({
    value,
    onChange,
}: {
    value: string;
    onChange: (html: string) => void;
}) {
    const [source, setSource] = useState(false);

    const editor = useEditor({
        extensions: [StarterKit.configure({ link: { openOnClick: false } })],
        content: value,
        immediatelyRender: false,
        onUpdate: ({ editor }) => onChange(editor.getHTML()),
        editorProps: {
            attributes: { class: 'rte min-h-56 px-3 py-2 outline-none' },
        },
    });

    if (!editor) {
        return null;
    }

    const tool = (
        label: string,
        icon: React.ReactNode,
        action: () => void,
        active = false,
    ) => (
        <Button
            key={label}
            type="button"
            size="icon"
            variant={active ? 'secondary' : 'ghost'}
            aria-label={label}
            title={label}
            onClick={action}
        >
            {icon}
        </Button>
    );

    const setLink = () => {
        const previous = editor.getAttributes('link').href as string | undefined;
        const url = window.prompt('Link URL (empty to remove)', previous ?? 'https://');

        if (url === null) {
            return;
        }

        if (url === '') {
            editor.chain().focus().extendMarkRange('link').unsetLink().run();
        } else {
            editor.chain().focus().extendMarkRange('link').setLink({ href: url }).run();
        }
    };

    return (
        <div className="rounded-md border border-input">
            <div className="flex flex-wrap items-center gap-0.5 border-b border-input p-1">
                {tool('Bold', <Bold />, () => editor.chain().focus().toggleBold().run(), editor.isActive('bold'))}
                {tool('Italic', <Italic />, () => editor.chain().focus().toggleItalic().run(), editor.isActive('italic'))}
                {tool('Heading 2', <Heading2 />, () => editor.chain().focus().toggleHeading({ level: 2 }).run(), editor.isActive('heading', { level: 2 }))}
                {tool('Heading 3', <Heading3 />, () => editor.chain().focus().toggleHeading({ level: 3 }).run(), editor.isActive('heading', { level: 3 }))}
                {tool('Bullet list', <List />, () => editor.chain().focus().toggleBulletList().run(), editor.isActive('bulletList'))}
                {tool('Numbered list', <ListOrdered />, () => editor.chain().focus().toggleOrderedList().run(), editor.isActive('orderedList'))}
                {tool('Link', <Link2 />, setLink, editor.isActive('link'))}
                {tool('Undo', <Undo2 />, () => editor.chain().focus().undo().run())}
                {tool('Redo', <Redo2 />, () => editor.chain().focus().redo().run())}
                <span className="mx-1 h-5 w-px bg-border" />
                {tool(
                    'HTML source',
                    <Code />,
                    () => {
                        if (source) {
                            editor.commands.setContent(value, { emitUpdate: false });
                        }
                        setSource(!source);
                    },
                    source,
                )}
            </div>
            {source ? (
                <textarea
                    className={cn(textareaClass, 'min-h-56 rounded-none border-0 font-mono text-xs')}
                    value={value}
                    onChange={(event) => onChange(event.target.value)}
                    spellCheck={false}
                />
            ) : (
                <EditorContent editor={editor} />
            )}
        </div>
    );
}
