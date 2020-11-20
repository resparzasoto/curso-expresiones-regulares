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
