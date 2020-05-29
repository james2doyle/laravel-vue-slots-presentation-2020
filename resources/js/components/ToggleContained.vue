<!--
  This is the way you might typically build a component like this
 -->
<template>
  <div class="toggle-wrapper bg-blue-500 p-4">
    <p class="mb-4">The state is <span v-if="state">True</span><span v-else>False</span></p>
    <button type="button" class="px-4 py-2 bg-white rounded" @click.prevent="toggle">Toggle</button>
  </div>
</template>

<script>
export default {
  name: 'ToggleContained',
  data() {
    return {
      state: false,
    };
  },
  methods: {
    toggle() {
      this.state = !this.state;
    },
  },
};
</script>
