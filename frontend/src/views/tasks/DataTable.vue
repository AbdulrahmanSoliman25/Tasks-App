<template>
  <v-container>
    <v-data-table
      :headers="headers"
      :items="tasks"
      disable-pagination
      :hide-default-footer="true"
    ></v-data-table>
    <v-pagination
      class="mt-5"
      dark
      color="#546e7a"
      v-model="page"
      :length="Math.ceil(pagination.total / pagination.per_page)"
      total-visible="10"
      next-icon="mdi-menu-right"
      prev-icon="mdi-menu-left"
      @input="handlePageChange"
    ></v-pagination>
  </v-container>
</template>

<script>
import { mapActions, mapGetters } from "vuex";

export default {
  data() {
    return {
      headers: [
        {
          text: "Title",
          align: "start",
          sortable: false,
          value: "title",
        },
        { text: "Description", value: "description" },
        { text: "Assigned to", value: "user" },
        { text: "Admin", value: "admin" },
      ],
      page: 1,
    };
  },
  computed: {
    ...mapGetters("Tasks", ["tasks", "pagination"]),
  },
  methods: {
    ...mapActions("Tasks", ["getTasksAction"]),
    handlePageChange(value) {
      this.page = value;
      this.getTasksAction(this.page);
    },
  },

  created() {
    this.getTasksAction(this.page);
  },
};
</script>

<style scoped>
.v-pagination {
  background-color: #546e7a !important;
}
</style>
