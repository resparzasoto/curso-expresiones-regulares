# Curso de Expresiones Regulares

**_Alberto Alcocer_**

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
