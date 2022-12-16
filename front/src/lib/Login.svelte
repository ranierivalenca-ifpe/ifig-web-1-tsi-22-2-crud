<script>
  import { currentPage, isLogged } from "../stores";


  let username = "";
  let password = "";
  async function handle() {
    const form = new FormData();
    form.append("username", username);
    form.append("password", password);

    const response = await fetch("http://localhost:8000/login.php", {
      method: "POST",
      body: form,
      credentials: "include",
    });
    if (!response.ok) {
      alert("Usuário ou senha incorreto");
      return;
    }
    $isLogged = true;
    $currentPage = 'home';
  }
</script>

<h1>Login</h1>

<form on:submit|preventDefault={handle}>
  <input type="text" bind:value={username} placeholder="nome de usuário" />
  <input type="password" bind:value={password} placeholder="senha" />
  <button>Login</button>
</form>
