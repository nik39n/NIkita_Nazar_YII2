import http from "../http-common";

class TovarDataService {
  getAll() {
    return http.get("/tovars");
  }

  get(id) {
    return http.get(`/tovars/${id}`);
  }

  create(data) {
    return http.post("/tovars", data);
  }

  update(id, data) {
    return http.put(`/tovars/${id}`, data);
  }

  delete(id) {
    return http.delete(`/tovars/${id}`);
  }

  deleteAll() {
    return http.delete(`/tovars`);
  }

  findByTitle(title) {
    return http.get(`/tovars?title=${title}`);
  }
}

export default new TovarDataService();