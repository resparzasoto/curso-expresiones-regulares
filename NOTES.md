# Curso de Expresiones Regulares

**_Alberto Alcocer_**

- [Curso de Expresiones Regulares](#curso-de-expresiones-regulares)
  - [2. El lenguaje: caracteres, operadores, y construcciones](#2-el-lenguaje-caracteres-operadores-y-construcciones)
    - [El carácter (.)](#el-carácter-)
      - [¿Qué es un archivo?](#qué-es-un-archivo)
      - [¿Qué es una cadena de caracteres?](#qué-es-una-cadena-de-caracteres)
      - [Ejemplos](#ejemplos)
        - [Encuentra todo lo que sea un carácter](#encuentra-todo-lo-que-sea-un-carácter)
        - [Encuentra todo lo que sea un carácter, seguido de un espacio](#encuentra-todo-lo-que-sea-un-carácter-seguido-de-un-espacio)
        - [Encuentra 10 caracteres seguidos en toda la linea](#encuentra-10-caracteres-seguidos-en-toda-la-linea)
  - [Las clases predefinidas y construidas](#las-clases-predefinidas-y-construidas)
    - [Clases predefinidas](#clases-predefinidas)
      - [\d](#d)
        - [Ejemplo](#ejemplo)
      - [\w](#w)
        - [Ejemplo](#ejemplo-1)
      - [\s](#s)
        - [Ejemplo](#ejemplo-2)
    - [Clases construidas](#clases-construidas)
    - [Escapar caracteres `\`](#escapar-caracteres-)
      - [Ejemplo](#ejemplo-3)
    - [Reto de hexadecimal](#reto-de-hexadecimal)
      - [Solución](#solución)
  - [Los delimitadores: +, *, ?](#los-delimitadores---)
    - [*](#)
      - [Ejemplo](#ejemplo-4)
    - [?](#-1)
      - [Ejemplo](#ejemplo-5)
    - [+](#-2)
      - [Ejemplo](#ejemplo-6)
    - [Combinando delimitadores](#combinando-delimitadores)
  - [Los contadores {1,4}](#los-contadores-14)
    - [Ejemplo](#ejemplo-7)
    - [Ejemplo](#ejemplo-8)
    - [Ejemplo](#ejemplo-9)
  - [El caso de (?) como delimitador](#el-caso-de--como-delimitador)
    - [Ejemplo](#ejemplo-10)
    - [Ejemplo](#ejemplo-11)
  - [Not (^), su uso y sus peligros](#not--su-uso-y-sus-peligros)
    - [Ejemplo](#ejemplo-12)
    - [Ejemplo](#ejemplo-13)
  - [Reto: Filtrando letras en números telefónicos utilizando negaciones](#reto-filtrando-letras-en-números-telefónicos-utilizando-negaciones)
    - [Solución](#solución-1)
  - [Principio (^) y final de linea ($)](#principio--y-final-de-linea-)
    - [Ejemplo](#ejemplo-14)

## 2. El lenguaje: caracteres, operadores, y construcciones

### El carácter (.)

El `.` nos servirá para buscar cualquier carácter, en una cadena de caracteres de un archivo.

#### ¿Qué es un archivo?

Un archivo es una sucesión de lineas de cadenas de caracteres.

#### ¿Qué es una cadena de caracteres?

Es una sucesión de caracteres, es importante tener en cuenta que no todos los caracteres son visibles.

#### Ejemplos

##### Encuentra todo lo que sea un carácter

```regex
.
```

> _Busca en grupos de 1_

##### Encuentra todo lo que sea un carácter, seguido de un espacio

```regex
._
```

> _Busca en grupos de 2_
>
> _Nota: En este ejemplo el carácter `_` representa un espacio._

##### Encuentra 10 caracteres seguidos en toda la linea

```regex
..........
```

> _Busca en grupos de 10_

Es importante tener en cuenta que al momento de realizar la búsqueda, se esta buscando en grupos.

## Las clases predefinidas y construidas

### Clases predefinidas

Las clases predefinidas sirven para buscar una sería de caracteres de una manera sencilla, ya con un funcionamiento probado.

> _NOTA: si nosotros utilizamos la clase predefinida en mayúscula, buscará exactamente lo contrario_

#### \d

Buscará cualquier dígito.

##### Ejemplo

Busca conjuntos de 1 dígito

```regex
\d
```

#### \w

Buscará cualquier carácter que sirva para una palabra, incluyendo el abecedario y el `_` [a-zA-Z_]

##### Ejemplo

Busca conjuntos de 1 carácter valida para palabra

```regex
\d
```

#### \s

Buscará espacios en blanco.

##### Ejemplo

Busca conjuntos de 1 espacio en blanco

```regex
\s
```

> _Nota: El cambio de linea también podría encontrarse con esta clase predefinida dependiendo del lenguaje_

### Clases construidas

En nuestras clases podremos ser más específicos que en las clases predefinidas.

### Escapar caracteres `\`

Con el `\` podemos escapar caracteres, así podremos utilizar el carácter `.` en nuestra expresión regular.

#### Ejemplo

Buscar una letra del abecedario y el `.`

```regex
[a-zA-Z\.]
```

### Reto de hexadecimal

Crear una expresión regular que busque el patrón de un numero hexadecimal.

#### Solución

```regex
[a-fA-F0-9]{6}
```

## Los delimitadores: +, *, ?

Vamos a encontrar dos tipos de conteos en nuestras expresiones regulares

- Que existan
- Que no existan

### *

Indica que puede existir **cero** o **n veces** el carácter.

#### Ejemplo

Indica que puede existir **cero** o **n caracteres** de cualquier tipo.

```regex
.*
```

### ?

Indica que puede existir **cero** o **solamente una vez** el carácter.

#### Ejemplo

Indica que puede existir **cero** o **solamente una vez** un carácter numérico.

```regex
\d?
```

### +

Indica que debe existir **uno** o **n veces** el carácter indicado.

#### Ejemplo

Indica que debe existir **uno** o **más** caracteres de palabras.

```regex
\w+
```

### Combinando delimitadores

Primero puede haber uno o más dígitos, lo siguiente debe ser uno o más caracteres de la a-z en minúscula, lo siguiente debe ser una s en minúscula, por ultimo, puede haber uno o más dígitos.

```regex
\d*[a-z]?s\d*

```

## Los contadores {1,4}

Los contadores nos sirve para limitar exactamente el numero de caracteres que deseamos delimitar.

### Ejemplo

Delimitamos dos dígitos.

```regex
\d{2,2}
```

> _En algunos lenguajes también podemos utilizar esta misma expresión de una manera más abreviada {2,2}_

### Ejemplo

Delimitamos desde al menos 4 dígitos hasta n numero de dígitos.

```regex
\d{4,}
```

### Ejemplo

Delimitamos exactamente dos dígitos al inicio, puede seguir un `-` ó `.` ó ` `, seguido de exactamente dos dígitos, puede seguir un `-` ó `.` ó ` `, por ultimo, dos dígitos al final de la expresión.

```regex
\d{2,2}[\-\. ]{0,1}\d{2,2}[\-\. ]?\d{2,2}
```

> _`\` nos permite escapar caracteres reservados_

## El caso de (?) como delimitador

El `?` puede tener el comportamiento cómo un delimitador **lazy**, esto quiere decir que puede acortar el match de la expresión, a lo más pequeño posible.

### Ejemplo

Coincide con cualquier carácter uno o más veces, delimitando el match a la expresión más pequeña que pueda cumplir.

```regex
.+?
```

### Ejemplo

Coincide con cualquier carácter una o más veces, seguido de específicamente una `,` ó `\n` (salto de linea), delimitando el match a la expresión más pequeña que pueda cumplir.

```regex
.+[,\n]{1,1}
```

## Not (^), su uso y sus peligros

El `^` nos permite negar el una clase.

### Ejemplo

Encuentra todo lo que no sea un dígito del `0` al `5` ó un carácter de la `a` hasta la `c`.

```regex
[^0-5a-c]
```

### Ejemplo

También podemos realizar negaciones de clases predefinidas con el carácter en mayúscula, busca todo lo que no sea un dígito.

```regex
\D
```

## Reto: Filtrando letras en números telefónicos utilizando negaciones

Expresión regular que haga match con todas las linea, exceptuando la ultima.

- 555658
- 56-58-11
- 56.58.11
- 56.78-98
- 65 09 87
- **76y87r98**

### Solución

```regex
(\d{2,2}\W?){3,3}
```

## Principio (^) y final de linea ($)

El `^` se utiliza para indicar el principio de la linea.

El `$` se utiliza para indicar el fin de la linea.

### Ejemplo

Esta expresión regular cumple con el formato de un archivo `.csv` de tres columnas, haciendo el match en toda la línea, gracias al `^` indicado al inicio y el `$` indicado al fin de la expresión.

```regex
^\w+,\w+,\w+$
```
