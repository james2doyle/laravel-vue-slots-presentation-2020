<template>
  <div class="card-contained-wrapper flex justify-between">
    <div class="user-list w-1/2">
      <ul class="flex flex-wrap w-full">
        <li v-for="user in users" :key="user.id" :class="{ 'bg-yellow-200': activeUser.id === user.id }" class="mb-4 w-full shadow-md p-6 flex justify-between items-center">
          <div class="flex items-center">
            <img class="h-16 w-16 rounded-full mr-4" :src="user.profile_image">
            <h2 class="text-lg">
              <span v-text="user.first_name"></span>
              &nbsp;<span v-text="user.last_name"></span>
            </h2>
          </div>
          <button type="button" class="px-6 py-2 bg-black text-white rounded" @click.prevent="setActive(user.id)">Preview</button>
        </li>
      </ul>
    </div>
    <div class="active-user relative w-1/2" v-if="activeUser.id">
      <div class="fixed shadow-lg bg-white rounded-lg py-6 px-10 mx-8">
        <img class="h-32 w-32 rounded-full mx-auto mb-4" :src="activeUser.profile_image">
        <div class="text-center">
          <h2 class="text-lg">
            <span v-text="activeUser.first_name"></span>
            &nbsp;<span v-text="activeUser.last_name"></span>
          </h2>
          <div class="text-gray-600 my-4">
            <a :href="`mailto:${activeUser.email}`" v-text="activeUser.email"></a>
          </div>
          <div class="text-gray-600 my-4">
            <p v-text="activeUser.bio"></p>
          </div>
          <div class="text-gray-600" v-text="activeUser.created_at"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CardsContained',
  props: {
    users: {
      type: Array,
      required: true,
    }
  },
  data() {
    return {
      active: false,
    };
  },
  computed: {
    activeUser() {
      return this.active ? this.users.find(({ id }) => id === this.active) : {};
    }
  },
  methods: {
    setActive(active) {
      this.active = active;
    },
  },
};
</script>
