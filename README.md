# miniMarkdown

miniMakdown is a library written in PHP. It's simple markup that makes it easy to add formatting, links, and images to plain text. 

Use function `minimarkdown()`

## Headings

To create a heading, add `#` symbols before your heading text. The number of `#` you use will determine the hierarchy level and typeface size of the heading.

```
# H1
## H2
### H3
```
## Styling text

| Style    | Sintaxis  | Example                       |
|----------|-----------|-------------------------------|
| bold     | `** **`   | `**This is bold text**`       |
| italic   | `_ _`     | `_This is italic text_`       |
| positive | `++ ++`   | `++This is positive text++`   |
| negative | `-- --`   | `--This is negative text--`   |

## Code fromat

To format code or text into its own distinct block, use backticks.

```
`Code format`
```


## Link

You can create an inline link by wrapping link text in brackets `[ ]`, and then wrapping the URL in parentheses `( )`.

```
[Google](https://www.google.com)
```

## Image

You can display an image by adding `!` and wrapping the alt text in `[ ]`. Alt text is a short text equivalent of the information in the image. Then, wrap the link for the image in parentheses `()`.

```
![Alt](https://www.google.com/intl/en_ALL/images/logo.gif)
```
