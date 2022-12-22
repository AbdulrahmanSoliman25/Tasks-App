<template>
  <v-simple-table>
    <thead>
      <tr>
        <th class="text-left">Name</th>
        <th class="text-left">Count</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="item in topTen" :key="item.user">
        <td>{{ item.user }}</td>
        <td>{{ item.count }}</td>
      </tr>
    </tbody>
  </v-simple-table>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
  computed: {
    ...mapGetters("Statistics", ["topTen"]),
  },
  methods: {
    ...mapActions("Statistics", ["getTopTen"]),
  },

  created() {
    this.getTopTen();
  },
};
</script>

<style></style>
