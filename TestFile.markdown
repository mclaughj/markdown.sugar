Markdown: Syntax
================

Overview
--------

Asterisks around a word actually look like \*emphasis\*.

### Inline HTML

__Markdown's__ syntax is intended for one _purpose_: to be used as a
format for *writing* for the **web**.

**Sometimes I want a lot of text to be bold.
Like, seriously, a _LOT_ of text**

The only restrictions are that block-level HTML elements -- e.g. `<div>`,
`<table>`, `<pre>`, `<p>`, etc. -- must be separated from surrounding
content by blank lines, and the start and end tags of the block should
not be indented with tabs or spaces. Markdown is smart enough not
to add extra (unwanted) `<p>` tags around HTML block-level tags.

I am #1.

For example, to add an HTML table to a Markdown article:

    This is a regular paragraph.

    <table>
        <tr>
            <td>Foo</td>
        </tr>
    </table>

    This is another regular paragraph.

Note that Markdown formatting syntax is not processed within block-level
HTML tags. E.g., you can't use Markdown-style `*emphasis*` inside an
HTML block.

Unlike block-level HTML tags, Markdown syntax *is* processed within
span-level tags.


http://images.google.com/images?num=30&q=larry+bird

AT&T

4 < 5

# This is an H1

## This is an H2

###### This is an H6

# This is an H1 #

## This is an H2 ##

### This is an H3 ######

> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
> consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.
> Vestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.
> 
> Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse
> id sem consectetuer libero luctus adipiscing.

> This is a blockquote with two paragraphs. Lorem ipsum dolor sit amet,
consectetuer adipiscing elit. Aliquam hendrerit mi posuere lectus.
Vestibulum enim wisi, viverra nec, fringilla in, laoreet vitae, risus.

> Donec sit amet nisl. Aliquam semper ipsum sit amet velit. Suspendisse
id sem consectetuer libero luctus adipiscing.

> This is the first level of quoting.
>
> > This is nested blockquote.
>
> Back to the first level.

> ## This is a header.
> 
> 1.   This is the first list item.
> 2.   This is the second list item.
> 
> + This is a list item
> + This is another list item
> 
> Here's some example code:
> 
>     return shell_exec("echo $input | $markdown_script");


*   __Red__
*   Green
*   Blue

+   Red
+   Green
+   Blue

-   Red
-   Green
-   Blue

1.  Bird
2.  McHale
3.  Parish

1.  Bird
1.  McHale
1.  Parish

3. Bird
1. McHale
8. Parish

*   Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
    Aliquam hendrerit mi posuere lectus. Vestibulum enim wisi,
    viverra nec, fringilla in, laoreet vitae, risus.
*   Donec sit amet nisl. Aliquam semper ipsum sit amet velit.
    Suspendisse id sem consectetuer libero luctus adipiscing.

*   Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
Aliquam hendrerit mi posuere lectus. Vestibulum enim wisi,
viverra nec, fringilla in, laoreet vitae, risus.
*   Donec sit amet nisl. Aliquam semper ipsum sit amet velit.
Suspendisse id sem consectetuer libero luctus adipiscing.


*   Bird

*   Magic


1.  This is a list item with two paragraphs. Lorem ipsum dolor
    sit amet, consectetuer adipiscing elit. Aliquam hendrerit
    mi posuere lectus.
    
    Vestibulum enim wisi, viverra nec, fringilla in, laoreet
    vitae, risus. Donec sit amet nisl. Aliquam semper ipsum
    sit amet velit.

2.  Suspendisse id sem consectetuer libero luctus adipiscing.


*   This is a list item with two paragraphs.
    
    This is the second paragraph in the list item. You're
only required to indent the first line. Lorem ipsum dolor
sit amet, consectetuer adipiscing elit.

*   Another item in the same list.

*   A list item with a blockquote:
    
    > This is a blockquote
    > inside a list item.


*   A list item with a code block:
    
        <code goes here>


1986. What a great season.

1986\. What a great season.

This is a normal paragraph:

    This is a code block.


* * *

***

*****

- - -

---------------------------------------


This is [an example](http://example.com/ "Title") inline link.

[This link](http://example.net/) has no title attribute.


See my [About](/about/) page for details.   

This is [an example][id] reference-style link.

This is [an example] [id] reference-style link.

   [id]: http://example.com/  "Optional Title Here"

That is:

*   Square brackets containing the link identifier (optionally
    indented from the left margin using up to three spaces);
*   followed by a colon;
*   followed by one or more spaces (or tabs);
*   followed by the URL for the link;
*   optionally followed by a title attribute for the link, enclosed
    in double or single quotes, or enclosed in parentheses.


[foo]: http://example.com/  "Optional Title Here"
[foo]: http://example.com/  'Optional Title Here'
[foo]: http://example.com/  (Optional Title Here)


[id]: <http://example.com/>

[id]: http://example.com/longish/path/to/resource/here
    "Optional Title Here"


[Google][]


Visit [Daring Fireball][] for more information.

[Daring Fireball]: http://daringfireball.net/


*single asterisks*

_single underscores_

**double asterisks**

__double underscores__

un*frigging*believable

But if you surround an `*` or `_` with spaces, it'll be treated as a
literal asterisk or underscore: * _.

Use the `printf()` function.

``There is a literal backtick (`) here.``

A single backtick in a code span: `` ` ``

A backtick-delimited string in a code span: `` `foo` ``


Please don't use any `<blink>` tags.

![Alt text](/path/to/img.jpg)

![Alt text](/path/to/img.jpg "Optional title")

That is:

*   An exclamation mark: `!`;
*   followed by a set of square brackets, containing the `alt`
    attribute text for the image;
*   followed by a set of parentheses, containing the URL or path to
    the image, and an optional `title` attribute enclosed in double
    or single quotes.

![Alt text][id]


[id]: url/to/image  "Optional title attribute"

<http://example.com/>

<address@example.com>

\\   backslash
\`   backtick
\*   asterisk
\_   underscore
\{
\}  curly braces
\[
\]  square brackets
\(
\)  parentheses
\#   hash mark
\+	plus sign
\-	minus sign (hyphen)
\.   dot
\!   exclamation mark

<div>
	<p>This is a paragraph</p>
</div>

*italic text*

<p>This is a regular paragraph on a single line.</p>

**bold text?**