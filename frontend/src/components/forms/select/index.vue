<template>
  <v-autocomplete
    dense
    filled
    rounded
    v-model="val"
    :label="label"
    :rules="[(v) => !!v || `${label} is required`]"
    :items="items"
    item-text="name"
    item-value="id"
  ></v-autocomplete>
</template>

<script>
export default {
  name: "input",
  props: {
    label: {
      type: String,
      default: "",
    },
    value: {
      type: Number,
      default: undefined,
    },
    items: {
      type: Array,
      default: () => {
        return [];
      },
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
