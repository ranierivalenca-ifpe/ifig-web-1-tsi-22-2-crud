<script>

let username = '';
let password = '';
let password2 = '';

function handle() {
    // aqui vamos submeter o formulário
    if (password != password2) return;

    let form = new FormData();
    form.append('username', username);
    form.append('password', password);
    fetch('http://localhost:8000/add-user.php', {
        method: 'POST',
        body: form
    })
}

</script>

<h1>Registro de usuário</h1>
<form on:submit|preventDefault={handle}>
    <input type="text" required bind:value={username} placeholder="home de usuário">
    <input type="password" required bind:value={password} placeholder="senha">
    <input type="password" required bind:value={password2} placeholder="confirme a senha">
    {#if password != '' && password != password2}
        <div class="danger">Senhas não conferem</div>
    {/if}
    <button>Cadastrar!</button>
</form>

<style>
    form {
        border: 1px solid gray;
        padding: 1em;
    }
    .danger {
        color: red;
    }
</style>