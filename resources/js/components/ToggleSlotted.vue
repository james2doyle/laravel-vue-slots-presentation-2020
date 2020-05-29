<template>
  <div class="toggle-wrapper">
    <slot v-bind="{ state, toggle }">
      <strong>Default content for slot required</strong>
    </slot>
  </div>
</template>

<script>
export default {
  name: 'ToggleSlotted',
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
