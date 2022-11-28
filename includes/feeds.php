<div class="col-12 col-lg-6 pb-5">
  <div class="d-flex flex-column justify-content-center w-100 mx-auto" style="padding-top: 56px; max-width: 680px">
    <!-- create post -->
    <div class="bg-white p-3 mt-3 rounded border shadow">
      <!-- avatar -->
      <div class="d-flex" type="button">
        <div class="p-1">
          <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2"
            style="width: 38px; height: 38px; object-fit: cover" />
        </div>
        <input type="text" class="form-control rounded-pill border-0 bg-gray pointer" disabled
          placeholder="What's on your mind, John?" data-bs-toggle="modal" data-bs-target="#createModal" />
      </div>
      <!-- create modal -->
      <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true"
        data-bs-backdrop="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- head -->
            <div class="modal-header align-items-center">
              <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">
                Create Post
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- body -->
            <div class="modal-body">
              <div class="my-1 p-1">
                <div class="d-flex flex-column">
                  <!-- name -->
                  <div class="d-flex align-items-center">
                    <div class="p-2">
                      <img src="https://source.unsplash.com/collection/happy-people" alt="from fb"
                        class="rounded-circle" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                    </div>
                    <div>
                      <p class="m-0 fw-bold">John</p>
                      <select class="form-select border-0 bg-gray w-75 fs-7" aria-label="Default select example">
                        <option selected value="1">Public</option>
                        <option value="2">Pin To Top</option>
                        <option value="3">Hide</option>
                      </select>
                    </div>
                  </div>
                  <!-- text -->
                  <div>
                    <textarea cols="30" rows="5" class="form-control border-0"></textarea>
                  </div>
                  <!-- emoji  -->
                  <div class="
                              d-flex
                              justify-content-between
                              align-items-center
                            ">
                    <img src="https://www.facebook.com/images/composer/SATP_Aa_square-2x.png" class="pointer"
                      alt="fb text" style="
                                width: 30px;
                                height: 30px;
                                object-fit: cover;
                              " />
                    <i class="far fa-laugh-wink fs-5 text-muted pointer"></i>
                  </div>
                  <!-- options -->
                  <div class="
                              d-flex
                              justify-content-between
                              border border-1 border-light
                              rounded
                              p-3
                              mt-3
                            ">
                    <p class="m-0">Add to your post</p>
                    <div>
                      <i class="
                                  fas
                                  fa-images
                                  fs-5
                                  text-success
                                  pointer
                                  mx-1
                                "></i>
                      <i class="
                                  fas
                                  fa-user-check
                                  fs-5
                                  text-primary
                                  pointer
                                  mx-1
                                "></i>
                      <i class="
                                  far
                                  fa-smile
                                  fs-5
                                  text-warning
                                  pointer
                                  mx-1
                                "></i>
                      <i class="
                                  fas
                                  fa-map-marker-alt
                                  fs-5
                                  text-info
                                  pointer
                                  mx-1
                                "></i>
                      <i class="
                                  fas
                                  fa-microphone
                                  fs-5
                                  text-danger
                                  pointer
                                  mx-1
                                "></i>
                      <i class="
                                  fas
                                  fa-ellipsis-h
                                  fs-5
                                  text-muted
                                  pointer
                                  mx-1
                                "></i>
                    </div>
                  </div>
                </div>
              </div>

              <!-- end -->
            </div>
            <!-- footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary w-100">
                Post
              </button>
            </div>
          </div>
        </div>
      </div>
      <hr />
      <!-- actions -->
      <div class="d-flex flex-column flex-lg-row mt-3">
        <!-- a 1 -->
        <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
          <i class="fas fa-video me-2 text-danger"></i>
          <p class="m-0 text-muted">Live Video</p>
        </div>
        <!-- a 2 -->
        <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
          <i class="fas fa-photo-video me-2 text-success"></i>
          <p class="m-0 text-muted">Photo/Video</p>
        </div>
        <!-- a 3 -->
        <div class="
                    dropdown-item
                    rounded
                    d-flex
                    align-items-center
                    justify-content-center
                  " type="button">
          <i class="fas fa-smile me-2 text-warning"></i>
          <p class="m-0 text-muted">Feeling/Activity</p>
        </div>
      </div>
    </div>
    <!-- posts -->
    <!-- p 1 -->
    <div class="bg-white p-4 rounded shadow mt-3">
      <!-- author -->
      <div class="d-flex justify-content-between">
        <!-- avatar -->
        <div class="d-flex">
          <img src="https://source.unsplash.com/collection/happy-people" alt="avatar" class="rounded-circle me-2"
            style="width: 38px; height: 38px; object-fit: cover" />
          <div>
            <p class="m-0 fw-bold">John</p>
            <span class="text-muted fs-7">July 17 at 1:23 pm</span>
          </div>
        </div>
        <!-- edit -->
        <i class="fas fa-ellipsis-h" type="button" id="post1Menu" data-bs-toggle="dropdown" aria-expanded="false"></i>
        <!-- edit menu -->
        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1Menu">
          <li class="d-flex align-items-center">
            <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#">
              Edit Post</a>
          </li>
          <li class="d-flex align-items-center">
            <a class="
                        dropdown-item
                        d-flex
                        justify-content-around
                        align-items-center
                        fs-7
                      " href="#">
              Delete Post</a>
          </li>
        </ul>
      </div>
      <!-- post content -->
      <div class="mt-3">
        <!-- content -->
        <div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quae fuga incidunt consequatur tenetur doloremque officia
            corrupti provident tempore vitae labore?
          </p>
          <img src="https://source.unsplash.com/random/12" alt="post image" class="img-fluid rounded" />
        </div>
        <!-- likes & comments -->
        <div class="post__comment mt-3 position-relative">
          <!-- likes -->
          <div class="
                      d-flex
                      align-items-center
                      top-0
                      start-0
                      position-absolute
                    " style="height: 50px; z-index: 5">
            <div class="me-2">
              <i class="text-primary fas fa-thumbs-up"></i>
              <i class="text-danger fab fa-gratipay"></i>
              <i class="text-warning fas fa-grin-squint"></i>
            </div>
            <p class="m-0 text-muted fs-7">Phu, Tuan, and 3 others</p>
          </div>
          <!-- comments start-->
          <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">
              <!-- comment collapse -->
              <h2 class="accordion-header" id="headingTwo">
                <div class="
                            accordion-button
                            collapsed
                            pointer
                            d-flex
                            justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                  aria-controls="collapsePost1">
                  <p class="m-0">2 Comments</p>
                </div>
              </h2>
              <hr />
              <!-- comment & like bar -->
              <div class="d-flex justify-content-around">
                <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          ">
                  <i class="fas fa-thumbs-up me-3"></i>
                  <p class="m-0">Like</p>
                </div>
                <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                  aria-controls="collapsePost1">
                  <i class="fas fa-comment-alt me-3"></i>
                  <p class="m-0">Comment</p>
                </div>
              </div>
              <!-- comment expand -->
              <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <hr />
                <div class="accordion-body">
                  <!-- comment 1 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                      class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <!-- comment menu of author -->
                      <div class="d-flex justify-content-end">
                        <!-- icon -->
                        <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton"
                          data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <!-- menu -->
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                          <li class="d-flex align-items-center">
                            <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                              Edit Comment</a>
                          </li>
                          <li class="d-flex align-items-center">
                            <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                              Delete Comment</a>
                          </li>
                        </ul>
                      </div>
                      <p class="fw-bold m-0">John</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- comment 2 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <p class="fw-bold m-0">Jerry</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- create comment -->
                  <form class="d-flex my-1">
                    <!-- avatar -->
                    <div>
                      <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                        class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                    </div>
                    <!-- input -->
                    <input type="text" class="form-control border-0 rounded-pill bg-gray"
                      placeholder="Write a comment" />
                  </form>
                  <!-- end -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </div>
    <!-- p 2 -->
    <div class="bg-white p-4 rounded shadow mt-3">
      <!-- author -->
      <div class="d-flex justify-content-between">
        <!-- avatar -->
        <div class="d-flex">
          <img src="https://source.unsplash.com/random/1" alt="avatar" class="rounded-circle me-2"
            style="width: 38px; height: 38px; object-fit: cover" />
          <div>
            <p class="m-0 fw-bold">Mike</p>
            <span class="text-muted fs-7">May 24 at 1:23 pm</span>
          </div>
        </div>
      </div>
      <!-- post content -->
      <div class="mt-3">
        <!-- content -->
        <div>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Quae fuga incidunt consequatur tenetur doloremque officia
            corrupti provident tempore vitae labore?
          </p>
          <img src="https://source.unsplash.com/random/13" alt="post image" class="img-fluid rounded" />
        </div>
        <!-- likes & comments -->
        <div class="post__comment mt-3 position-relative">
          <!-- likes -->
          <div class="
                      d-flex
                      align-items-center
                      top-0
                      start-0
                      position-absolute
                    " style="height: 50px; z-index: 5">
            <div class="me-2">
              <i class="text-primary fas fa-thumbs-up"></i>
              <i class="text-danger fab fa-gratipay"></i>
              <i class="text-warning fas fa-grin-squint"></i>
            </div>
            <p class="m-0 text-muted fs-7">Phu, Tuan, and 3 others</p>
          </div>
          <!-- comments start-->
          <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">
              <!-- comment collapse -->
              <h2 class="accordion-header" id="headingTwo">
                <div class="
                            accordion-button
                            collapsed
                            pointer
                            d-flex
                            justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                  aria-controls="collapsePost1">
                  <p class="m-0">2 Comments</p>
                </div>
              </h2>
              <hr />
              <!-- comment & like bar -->
              <div class="d-flex justify-content-around">
                <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          ">
                  <i class="fas fa-thumbs-up me-3"></i>
                  <p class="m-0">Like</p>
                </div>
                <div class="
                            dropdown-item
                            rounded
                            d-flex
                            justify-content-center
                            align-items-center
                            pointer
                            text-muted
                            p-1
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false"
                  aria-controls="collapsePost1">
                  <i class="fas fa-comment-alt me-3"></i>
                  <p class="m-0">Comment</p>
                </div>
              </div>
              <!-- comment expand -->
              <div id="collapsePost1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <hr />
                <div class="accordion-body">
                  <!-- comment 1 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                      class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <!-- comment menu of author -->
                      <div class="d-flex justify-content-end">
                        <!-- icon -->
                        <i class="fas fa-ellipsis-h text-blue pointer" id="post1CommentMenuButton"
                          data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <!-- menu -->
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="post1CommentMenuButton">
                          <li class="d-flex align-items-center">
                            <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                              Edit Comment</a>
                          </li>
                          <li class="d-flex align-items-center">
                            <a class="
                                        dropdown-item
                                        d-flex
                                        justify-content-around
                                        align-items-center
                                        fs-7
                                      " href="#">
                              Delete Comment</a>
                          </li>
                        </ul>
                      </div>
                      <p class="fw-bold m-0">John</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- comment 2 -->
                  <div class="d-flex align-items-center my-1">
                    <!-- avatar -->
                    <img src="https://source.unsplash.com/random/2" alt="avatar" class="rounded-circle me-2" style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              " />
                    <!-- comment text -->
                    <div class="p-3 rounded comment__input w-100">
                      <p class="fw-bold m-0">Jerry</p>
                      <p class="m-0 fs-7 bg-gray p-2 rounded">
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit.
                      </p>
                    </div>
                  </div>
                  <!-- create comment -->
                  <form class="d-flex my-1">
                    <!-- avatar -->
                    <div>
                      <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                        class="rounded-circle me-2" style="
                                  width: 38px;
                                  height: 38px;
                                  object-fit: cover;
                                " />
                    </div>
                    <!-- input -->
                    <input type="text" class="form-control border-0 rounded-pill bg-gray"
                      placeholder="Write a comment" />
                  </form>
                  <!-- end -->
                </div>
              </div>
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </div>
  </div>
</div>