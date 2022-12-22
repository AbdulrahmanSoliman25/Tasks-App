<template>
  <v-text-field
    dense
    filled
    rounded
    v-model="val"
    :label="label"
    :rules="[(v) => !!v || `${label} is required`]"
  ></v-text-field>
</template>

<script>
export default {
  name: "pro-input",
  props: {
    label: {
      type: String,
      default: "",
    },
    value: {
      type: String,
      default: "",
    },
  },
  computed: {
    val: {
      get() {
        return this.value;
      },
      set(val) {
        this.$emit("input", val);
      },
    },
  },
};
</script>

<style></style>
