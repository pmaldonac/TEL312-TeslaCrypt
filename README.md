# TEL312-TeslaCrypt
Este proyecto busca simular un ataque del randsomware TeslaCrypt a un servidor web. Utilizaremos XSS para hacer inyección de comandos y establecer una reverse shell con una máquina linux.

#### Verificar que tanto el sistema Linux como el Windows esten en una red interna virtual para que el randsomware no escale a nuestra máquina.

## Preparación de Sistema Linux (Máquina Atacante)
Para cargar el ransomware levantaremos un servidor local del directorio mediante el siguiente comando.
<img width="462" alt="python kali" src="https://user-images.githubusercontent.com/86903144/181142883-79a5eee6-e76d-4aba-b2c1-c4e4a2e7f2ea.png">

Por otro lado, utilizaremos Ncat para ponernos a la escucha del puerto 4000 y así establecer nuestra reverse shell desde aquí.

<img width="418" alt="nc_kali" src="https://user-images.githubusercontent.com/86903144/181143597-e9de6546-31f4-4e4f-bedc-2ac1d1b9f36c.png">

## Preparación de Sistema Windows (Máquina Víctima)
Para la simulación utilizamos una máquina virtual con sistema operativo Windows 7.
### Herramientas a instalar
- Ncat -> Herramienta que instalaremos para poder establecer conexión con la máquina atacante.
- wget -> Herramienta similar a cURL, la utilizaremos para cargar el randsomware en la máquina atacante mediante línea de comandos.
- XAMP -> Herramienta para levantar el servidor PHP.

Una vez instaladas las herramientas anteriores, colocaremos la carpeta server que se encuentra en este repositorio en la carpeta htdocs para poder levantar el servidor e iniciaremos el servidor activando la casilla Apache en XAMP.

<img width="502" alt="xamp" src="https://user-images.githubusercontent.com/86903144/181141451-7ad67aa9-b973-4c27-9b97-9f4e98508854.png">

Iniciamos el navegador y colocamos como url htpp://localhost/server y se desplegará nuestro servidor web.


![servidor](https://user-images.githubusercontent.com/86903144/181141782-7d6fc6c8-895b-474f-a29b-f86e79bcaeca.png)

En el campo Access Log tiene como función buscar archivos logs mediante línea de comandos, aprovecharemos este campo para inyectar comandos y establecer una conexión con nuestra máquina atacante.

