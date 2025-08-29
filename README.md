# 🎡 Amusement Park - Sistema de Vendas de Ingressos

Bem-vindo ao projeto **Amusement Park**! Este sistema web foi desenvolvido para gerenciar a venda de ingressos de um parque de diversões, proporcionando uma experiência moderna, intuitiva e visualmente agradável para o usuário.

## ✨ Funcionalidades
- Compra de ingressos online com cálculo automático do valor total
- Visual moderno e responsivo com animações e balões
- Cadastro das vendas no banco de dados MySQL
- Página de confirmação de compra
- Navegação intuitiva entre as páginas

## 🚀 Como Executar Localmente

1. **Pré-requisitos:**
   - PHP 7.4+
   - MySQL
   - XAMPP, WAMP ou similar

2. **Instalação:**
   - Clone ou copie a pasta do projeto para o diretório `htdocs` do seu XAMPP/WAMP:
     ```
     C:/xampp/htdocs/Amusement_Park
     ```

3. **Banco de Dados:**
   - Importe o arquivo `criar_tabela.sql` no phpMyAdmin para criar o banco e a tabela `vendas`.
   - Certifique-se de que as credenciais do banco local estão corretas em `models/Database.php` (já configurado para ambiente local e produção).

4. **Acesse o sistema:**
   - Inicie o Apache e o MySQL pelo XAMPP/WAMP.
   - No navegador, acesse:
     ```
     http://localhost/Amusement_Park/
     ```

## 🗂️ Estrutura do Projeto
```
Amusement_Park/
├── controllers/
│   └── VendaController.php
├── models/
│   ├── Database.php
│   └── Venda.php
├── views/
│   ├── assets/
│   │   └── style.css
│   ├── home.php
│   ├── sucesso.php
│   └── venda.php
├── criar_tabela.sql
├── index.php
├── README.md
```

## 💻 Tecnologias Utilizadas
- PHP (orientado a objetos)
- MySQL
- HTML5, CSS3 (moderno e responsivo)
- JavaScript (para prévia do valor total)

## 📸 Demonstração Visual
- Página inicial com card centralizado e balões animados
- Página de compra de ingressos com cálculo automático do valor total
- Página de sucesso após a compra

## 📝 Observações
- O sistema detecta automaticamente se está rodando localmente ou em produção, alterando as credenciais do banco conforme o ambiente.
- Para deploy, basta alterar as credenciais de produção em `models/Database.php`.

## 🤝 Contribuição
Sinta-se à vontade para sugerir melhorias ou abrir issues!

---
Desenvolvido por jimmyadmsenior

