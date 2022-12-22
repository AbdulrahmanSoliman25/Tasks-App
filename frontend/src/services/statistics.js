import axios from "@/network/axios";
import * as ep from "../endpoints/statistics";

export default class {
  static async getTopTen() {
    return await axios.get(ep.topTen).then((res) => res.data.data);
  }
}
