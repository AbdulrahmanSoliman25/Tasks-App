import StatisticsService from "../../services/statistics";

export default {
  namespaced: true,

  state: {
    topTen: [],
  },
  mutations: {
    setTopTen(state, payload) {
      state.topTen = payload;
    },
  },
  actions: {
    async getTopTen({ commit }) {
      commit("setLoading", true, { root: true });
      try {
        const response = await StatisticsService.getTopTen();
        commit("setTopTen", response);
      } catch (err) {
        console.log(err);
      } finally {
        commit("setLoading", false, { root: true });
      }
    },
  },
  getters: {
    topTen(state) {
      return state.topTen;
    },
  },
};
