<script>
  let name = "";

  function handle() {
    const form = new FormData();
    form.append("name", name);
    fetch("http://localhost:8000/add-card.php", {
      method: "POST",
      body: form,
      credentials: "include",
    });
  }
</script>

<form on:submit|preventDefault={handle}>
  <input type="text" bind:value={name} />
  <button>Cadastrar</button>
</form>
