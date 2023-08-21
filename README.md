# CRUD

Um aplicativo que permite criar, ler, editar e apagar clientes (CRUD).

## Stack utilizada

**Front-end:** JavaScript

*Framework:* Bootstrap

**Back-end:** PHP

**Banco de Dados:** MySQL

# Vídeos

### Adição de usuários

```INSERT INTO `usuarios` (numero, codigo, atualizacao) VALUES ('{$tel}', '{$codigo}', '{$datetime}')```

[![Adição de usuários]](https://github.com/elder-ramos/crud_php/assets/99875876/7c01aa02-faae-4e59-a3de-37a076748cfe)


### Edição de usuários

```"UPDATE usuarios SET numero = '{$tel}', codigo = '{$codigo}' WHERE id=".$_REQUEST['id']```

[![Edição de usuários]](https://github.com/elder-ramos/crud_php/assets/99875876/05c9c997-2d07-4aa7-ab80-d721fa603c2b)

### Exclusão de usuários

```"DELETE FROM `usuarios` WHERE id=".$_REQUEST['id']```

[![Exclusão de usuário]](https://github.com/elder-ramos/crud_php/assets/99875876/ea17e3d0-5649-46e0-ba23-d12d9594410a)
