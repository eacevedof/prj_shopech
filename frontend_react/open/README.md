### Notas PWA
- Servico [**ngrok**](https://ngrok.com/download)
  - Mapea una url httsp web a tu localhost 
  - comando:
    - **`./ngrok http 3000`**
    - Uso 3000 ya que es por donde esta sirviendo la app react con: `npm run start`
  - **ejemplo**
  ```s
  Session Status                online                                                                                                                    
  Account                       <usuario> (Plan: Free)                                                                                                  
  Version                       2.3.35 
  Region                        United States (us)
  Web Interface                 http://127.0.0.1:4040                                                                                                     
  Forwarding                    http://<some-token>.ngrok.io -> http://localhost:3000                                                                         
  Forwarding                    https://<some-token>.ngrok.io -> http://localhost:3000                                                                        
                                                                                                                                                          
  Connections                   ttl     opn     rt1     rt5     p50 p90                                                                               
                                27      1       0.06    0.06    5.41    8.29
  ```

### Deploy
```py
<prject-id> esta en el config/json
py.sh deploy.<function> <project-id>
py.sh deploy shopelchalan
py.sh deploy.frontbuild shopelchalan
py.sh deploy.composer shopelchalan
py.sh deploy.dbrestore shopelchalan
```

### To-do:
- loading button
- header fixed

### Error con chunks en prod
- Para corregir esto he seguido esta guia: [deshabilitar chunks](https://zeph.co/disable-code-splitting-create-react-app)
