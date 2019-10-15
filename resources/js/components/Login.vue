<template></template>
<script>
export default {
  props: ["csrf"],
  data() {
    return {
      error: "",
      csrf: document.head.querySelector('meta[name="csrf-token"]').content
    };
  }
};
</script>
<style scoped>
</style>