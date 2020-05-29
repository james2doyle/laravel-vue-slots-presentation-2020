<template>
  <div class="card-contained-wrapper flex justify-between">
    <div class="user-list w-1/2">
      <div class="flex flex-wrap w-full">
        <slot name="user-list" :activeUser="activeUser" :setActive="setActive"></slot>
      </div>
    </div>
    <slot name="active-user" :activeUser="activeUser"></slot>
  </div>
</template>

<script>
export default {
  name: 'CardsSlotted',
  data() {
    return {
      activeUser: {},
    };
  },
  methods: {
    setActive(activeUser) {
      // we sent down the active user as a string, so we need to parse it
      this.activeUser = JSON.parse(activeUser);
    },
  },
};
</script>
