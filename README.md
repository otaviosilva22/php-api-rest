# Criação e Consumo de API REST com PHP

Simples exemplo de criação e consumo de API REST com PHP.

<h2> Tecnologias Utilizadas </h2>

- [MySQL](https://www.mysql.com/)
- [PHP](https://www.php.net/)
- [Bootstrap](https://getbootstrap.com/)
- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [CSS](https://devdocs.io/css/)

<h2> SQL </h2>

```
CREATE DATABASE estoque;

USE estoque;

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
```

<h2> API </h2>
<ul>
  <li><b>Consultas Gerais:</b></li>
  http://localhost/php-api/api/estoque/produto
  <li><b>Consultas Específicas:</b></li>
  http://localhost/php-api/api/estoque/read/NomeProduto
</ul>

<h2> Contato </h2>

[![Linkedin Badge](https://img.shields.io/badge/-Otávio-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/otaviosilva22/)](https://www.linkedin.com/in/otaviosilva22/)
[![Gmail Badge](https://img.shields.io/badge/-otavio.ssilva22@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:otavio.ssilva22@gmail.com)](mailto:otavio.ssilva22@gmail.com)
