# markdown-preview.vim

**Markdown Preview** is a Vim Plugin to visualize Markdown documents with the Github styles.

![Exemple](assets/exemple.gif)

# Install

Use your favorite vim plugin manager, like

Plug

```
call plug#begin()

Plug 'edersonferreira/markdown-preview.vim'

call plug#end()
```

And install the PHP and Ruby languages. Using the package manager from your system.

# Configuration

First, you need to define the browser what **Markdown Preview** will use.

`let g:markdownpreview#browser = "your_browser"`

If you use firefox, you will need to put it for exemple:

`let g:markdownpreview#browser = "firefox"`

# Using

To use **Markdown Preview**, you only need to run `MDPreview` and it will be started. And for turn off, only run `MDPreview` again.
