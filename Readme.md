## Servicio de seguridad de datos basado en sobres digitales

Demo de un servicio básico para el cifrado de datos punto-a-punto de datos. 

El demo de compone de dos archivos principales:

1. ```server.php```: cifra cadenas JSON y devuelve un JSON cifrado.
1. ```request.php```: realiza la solicitud de datos a ```server.php``` y descifra los datos recibidos.

#### DETABE.jar

Aplicación para cifrar los datos con CP-ABE y AES. 

```bash 
java -jar DETABE.jar <1|2> data
```

Parameters:

1. 1 to cipher data, 2 to decipher a ciphered string
2. data: data to cipher/decipher