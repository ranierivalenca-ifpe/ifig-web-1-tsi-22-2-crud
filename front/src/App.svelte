<script>
  import Index from "./lib/Index.svelte";
  import Navbar from "./lib/Navbar.svelte";
  import Register from "./lib/Register.svelte";
  import Login from "./lib/Login.svelte";
  import { currentPage, isLogged } from "./stores";
  import Home from "./lib/Home.svelte";
  import { onMount } from "svelte";

  onMount(async () => {
    const response = await fetch("http://localhost:8000/is-logged.php", {
      credentials: "include",
    });
    if (response.ok) {
      $isLogged = true;
    }
  });
</script>

<main>
  <Navbar />

  {#if $currentPage == "index"}
    <Index />
  {:else if $currentPage == "register"}
    <Register />
  {:else if $currentPage == "login"}
    <Login />
  {:else if $currentPage == "home"}
    <Home />
  {/if}
</main>
