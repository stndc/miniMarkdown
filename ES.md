# miniMarkdown

miniMakdown es una librería escrita en PHP. Es un marcado simple que facilita la adición de formato, enlaces e imágenes a texto sin formato.

Use la función `minimarkdown()`

```
<?php

include 'miniMarkdown.php';

$h1 = '# h1 Text';
echo minimarkdown($h1);

?>
```

## Encabezados

Para crear un encabezado, agregue símbolos `#` antes del texto del encabezado. El número de `#` que utilice determinará el nivel de jerarquía y el tamaño del tipo de letra del encabezado.

```
# H1
## H2
### H3
```
## Aplicar estilos al texto

| Style    | Sintaxis  | Example                       |
|----------|-----------|-------------------------------|
| bold     | `** **`   | `**Texto en negrita**`        |
| italic   | `_ _`     | `_Texto en italic_`           |
| positive | `++ ++`   | `++Texto positivo++`          |
| negative | `-- --`   | `--Texto negativo--`          |

## Formato de código

Para dar formato al código o texto en su propio bloque distinto, use comillas invertidas.

```
`Formato de código`
```


## Enlace

Puede crear un vínculo en línea envolviendo el texto del vínculo entre corchetes `[ ]` y, a continuación, envolviendo la URL entre paréntesis `()`.

```
[Google](https://www.google.com)
```

## Imagen

Puede mostrar una imagen agregando `!` y envolviendo el texto alternativo en `[ ]`. El texto alternativo es un texto corto equivalente a la información de la imagen. A continuación, envuelva el enlace de la imagen entre paréntesis `()`.

```
![Alt](https://www.google.com/intl/en_ALL/images/logo.gif)
```

## Licencia

[MIT](https://github.com/stndc/miniMarkdown/blob/main/LICENSE.md)
