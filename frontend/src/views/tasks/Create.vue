<template>
  <v-form ref="form" lazy-validation>
    <v-row align="center">
      <v-col>
        <ProInput v-model="title" :label="'title'" />
      </v-col>
      <v-col>
        <ProSelect v-model="adminId" :label="'Admin'" :items="admins" />
      </v-col>
    </v-row>
    <v-row align="center">
      <v-col>
        <ProTextArea v-model="description" :label="'description'" />
      </v-col>
      <v-col>
        <ProSelect v-model="userId" :label="'User'" :items="users" />
      </v-col>
    </v-row>
    <v-row>
      <v-col>
        <v-btn color="secondary" elevation="1" rounded @click="validate">
          submit</v-btn
        >
      </v-col>
    </v-row>
  </v-form>
</template>
<script>
import ProInput from "@/components/forms/input";
import ProTextArea from "@/components/forms/textarea";
import ProSelect from "@/components/forms/select";
import { mapActions, mapGetters } from "vuex";
export default {
  components: { ProInput, ProTextArea, ProSelect },
  data: () => ({
    title: "",
    description: "",
    adminId: undefined,
    userId: undefined,
  }),
  computed: {
    ...mapGetters("Users", ["users"]),
    ...mapGetters("Admins", ["admins"]),
  },
  methods: {
    ...mapActions("Tasks", ["createtTaskAction"]),
    ...mapActions("Users", ["getUsersAction"]),
    ...mapActions("Admins", ["getAdminsAction"]),

    async validate() {
      let valid = await this.$refs.form.validate();
      if (valid) {
        let data = {
          title: this.title,
          description: this.description,
          admin_id: this.adminId,
          user_id: this.userId,
        };
        this.createtTaskAction(data);
      }
    },
  },
  created() {
    this.getAdminsAction();
    this.getUsersAction();
  },
};
</script>
