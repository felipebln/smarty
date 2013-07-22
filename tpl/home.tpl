<form action="" method="post" enctype="multipart/form-data">
    Nome: <input type="text" name="nome"><br>
    Preço: <input type="text" name="preco"><br>
    Foto: <input type="file" name="foto"><br>
    <input type="submit" value="ok" name="ok">
</form>

<div>
{section name=i loop=$livros}
    <p>{$livros[i]->livro} | {number_format($livros[i]->preco,2,",",".")}</p>
{/section}

</div>