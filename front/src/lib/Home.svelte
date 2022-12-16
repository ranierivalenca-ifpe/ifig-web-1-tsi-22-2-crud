<script>
  import { onMount } from "svelte";

  let name = "";
  let cards = []

  async function loadCards() {
    const response = await fetch("http://localhost:8000/get-user-cards.php", {
      credentials: "include",
    });
    if (!response.ok) {
      alert("deu merda, não tais logado");
      return;
    }
    cards = await response.json()
  }

  onMount(() => {
    loadCards();
  });

  async function handle() {
    const form = new FormData();
    form.append("name", name);
    const response = await fetch("http://localhost:8000/add-card.php", {
      method: "POST",
      body: form,
      credentials: "include",
    });
    if (!response.ok) {
      alert("deu merda");
      return;
    }
    name = "";
    loadCards();
  }
</script>

{#each cards as card}
    <div>{card.id} - {card.name}</div>
{/each}

<form on:submit|preventDefault={handle}>
  <input type="text" bind:value={name} />
  <button>Cadastrar</button>
</form>
