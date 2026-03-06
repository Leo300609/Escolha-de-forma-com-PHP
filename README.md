# 🎨 Gerador de Formas Dinâmico com PHP

Este projeto demonstra a integração entre o front-end (HTML) e o back-end (PHP), permitindo que o usuário interaja com um formulário e receba uma resposta visual personalizada gerada dinamicamente pelo servidor.

## 🚀 Tecnologias Utilizadas
* **HTML5:** Estruturação de formulários com elementos `<select>` e botões de submissão.
* **PHP:** * **Método POST:** Captura de dados enviados pelo usuário via formulário.
    * **Estruturas de Repetição (`for`):** Utilizadas tanto para gerar as opções do menu (1 a 10) quanto para renderizar as imagens repetidas na tela de exibição.
    * **Concatenação de Strings:** Lógica para construir dinamicamente o caminho do arquivo de imagem com base nas escolhas de forma e cor.

## 🧠 Lógica de Programação Aplicada:
* **Backend Dinâmico:** O servidor processa a escolha do usuário e decide qual imagem (`.png`) deve ser carregada da pasta `/fotos`.
* **Loop de Renderização:** Uso do loop `for` para controlar a quantidade exata de elementos que aparecem na tela, otimizando o código e evitando repetições manuais.
* **Integração Front-Back:** Fluxo completo de requisição e resposta entre `index.php` e `exibir.php`.

## ⚙️ Como visualizar
1. É necessário um ambiente de servidor local (como **XAMPP**, **WAMP** ou **Laragon**).
2. Coloque os arquivos na pasta `htdocs` (ou equivalente).
3. Certifique-se de que a pasta `/fotos` contenha as imagens nomeadas seguindo o padrão (ex: `quadradoazul.png`).
4. Acesse `localhost/nome-da-sua-pasta` no navegador.

---
Projeto desenvolvido para praticar lógica de programação e integração com banco de dados/servidores no curso de ADS. 💻🔥
