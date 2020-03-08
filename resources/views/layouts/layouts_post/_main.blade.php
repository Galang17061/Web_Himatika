@extends('layouts.layouts_frontend._main')

  {{-- Extra Css --}}
  @section('extra_style')
  <style>
      .blog_item {
          margin-bottom: 50px;
      }

      .blog_details {
          padding: 30px 0 20px 10px;
          box-shadow: 0px 10px 20px 0px rgba(221, 221, 221, 0.3);
      }

      @media (min-width: 768px) {
          .blog_details {
              padding: 60px 30px 35px 35px;
          }
      }

      .blog_details p {
          margin-bottom: 30px;
      }

      .blog_details a {
          color: var(--primary-color-blue);
      }

      .blog_details a:hover {
          color: var(--secondary-color-blue);
      }

      .blog_details h2 {
          font-size: 18px;
          font-weight: 600;
          margin-bottom: 8px;
      }

      @media (min-width: 768px) {
          .blog_details h2 {
              font-size: 24px;
              margin-bottom: 15px;
          }
      }

      .blog-info-link li {
          float: left;
          font-size: 14px;
      }

      .blog-info-link li a {
          color: #999999;
      }

      .blog-info-link li i,
      .blog-info-link li span {
          font-size: 13px;
          margin-right: 5px;
      }

      .blog-info-link li::after {
          content: "|";
          padding-left: 10px;
          padding-right: 10px;
      }

      .blog-info-link li:last-child::after {
          display: none;
      }

      .blog-info-link::after {
          content: "";
          display: block;
          clear: both;
          display: table;
      }

      .blog_item_img {
          position: relative;
      }

      .blog_item_img .blog_item_date {
          position: absolute;
          bottom: -10px;
          left: 10px;
          display: block;
          color: #fff;
          background: var(--secondary-color-blue);
          padding: 8px 15px;
          border-radius: 5px;
      }

      @media (min-width: 768px) {
          .blog_item_img .blog_item_date {
              bottom: -20px;
              left: 40px;
              padding: 13px 30px;
          }
      }

      .blog_item_img .blog_item_date h3 {
          font-size: 22px;
          font-weight: 600;
          color: #fff;
          margin-bottom: 0;
          line-height: 1.2;
      }

      @media (min-width: 768px) {
          .blog_item_img .blog_item_date h3 {
              font-size: 30px;
          }
      }

      .blog_item_img .blog_item_date p {
          margin-bottom: 0;
      }

      @media (min-width: 768px) {
          .blog_item_img .blog_item_date p {
              font-size: 18px;
          }
      }

      .blog_right_sidebar .widget_title {
          font-size: 20px;
          margin-bottom: 40px;
          color: var(--primary-color-blue);
      }

      .blog_right_sidebar .widget_title::after {
          content: "";
          display: block;
          padding-top: 15px;
          border-bottom: 1px solid #f0e9ff;
      }

      .blog_right_sidebar .single_sidebar_widget {
          background: #fbf9ff;
          padding: 30px;
          margin-bottom: 30px;
      }

      .blog_right_sidebar .search_widget .form-control {
          height: 50px;
          border-color: #f0e9ff;
          font-size: 13px;
          color: #999999;
          padding-left: 20px;
          border-radius: 0;
          border-right: 0;
      }

      .blog_right_sidebar .search_widget .form-control::placeholder {
          color: #999999;
      }

      .blog_right_sidebar .search_widget .form-control:focus {
          border-color: #f0e9ff;
          outline: 0;
          box-shadow: none;
      }

      .blog_right_sidebar .search_widget .input-group button {
          background: #fff;
          border-left: 0;
          border: 1px solid #f0e9ff;
          padding: 4px 15px;
          border-left: 0;
      }

      .blog_right_sidebar .search_widget .input-group button i,
      .blog_right_sidebar .search_widget .input-group button span {
          font-size: 14px;
          color: #999999;
      }

      .blog_right_sidebar .newsletter_widget .form-control {
          height: 50px;
          border-color: #f0e9ff;
          font-size: 13px;
          color: #999999;
          padding-left: 20px;
          border-radius: 0;
      }

      .blog_right_sidebar .newsletter_widget .form-control::placeholder {
          color: #999999;
      }

      .blog_right_sidebar .newsletter_widget .form-control:focus {
          border-color: #f0e9ff;
          outline: 0;
          box-shadow: none;
      }

      .blog_right_sidebar .newsletter_widget .input-group button {
          background: #fff;
          border-left: 0;
          border: 1px solid #f0e9ff;
          padding: 4px 15px;
          border-left: 0;
      }

      .blog_right_sidebar .newsletter_widget .input-group button i,
      .blog_right_sidebar .newsletter_widget .input-group button span {
          font-size: 14px;
          color: #999999;
      }

      .blog_right_sidebar .post_category_widget .cat-list li {
          border-bottom: 1px solid #f0e9ff;
          transition: all 0.3s ease 0s;
          padding-bottom: 12px;
      }

      .blog_right_sidebar .post_category_widget .cat-list li:last-child {
          border-bottom: 0;
      }

      .blog_right_sidebar .post_category_widget .cat-list li a {
          font-size: 14px;
          line-height: 20px;
          color: #888888;
      }

      .blog_right_sidebar .post_category_widget .cat-list li a p {
          margin-bottom: 0px;
      }

      .blog_right_sidebar .post_category_widget .cat-list li+li {
          padding-top: 15px;
      }

      .blog_right_sidebar .post_category_widget .cat-list li:hover a {
          color: var(--secondary-color-blue);
      }

      .blog_right_sidebar .popular_post_widget .post_item .media-body {
          justify-content: center;
          align-self: center;
          padding-left: 20px;
      }

      .blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
          font-size: 16px;
          line-height: 20px;
          margin-bottom: 6px;
          transition: all 0.3s linear;
      }

      .blog_right_sidebar .popular_post_widget .post_item .media-body a {
          color: var(--primary-color-blue);
      }

      .blog_right_sidebar .popular_post_widget .post_item .media-body a:hover {
          color: var(--secondary-color-blue);
      }

      .blog_right_sidebar .popular_post_widget .post_item .media-body p {
          font-size: 14px;
          line-height: 21px;
          margin-bottom: 0px;
      }

      .blog_right_sidebar .popular_post_widget .post_item+.post_item {
          margin-top: 20px;
      }

      .blog_right_sidebar .tag_cloud_widget ul li {
          display: inline-block;
      }

      .blog_right_sidebar .tag_cloud_widget ul li a {
          display: inline-block;
          border: 1px solid #eeeeee;
          background: #fff;
          padding: 4px 20px;
          margin-bottom: 8px;
          margin-right: 5px;
          transition: all 0.3s ease 0s;
          color: #888888;
          font-size: 13px;
      }

      .blog_right_sidebar .tag_cloud_widget ul li a:hover {
          background: var(--secondary-color-blue);
          color: #fff;
      }

      .blog_right_sidebar .instagram_feeds .instagram_row {
          display: flex;
          margin-right: -6px;
          margin-left: -6px;
      }

      .blog_right_sidebar .instagram_feeds .instagram_row li {
          width: 33.33%;
          float: left;
          padding-right: 6px;
          padding-left: 6px;
          margin-bottom: 15px;
      }

      .blog_right_sidebar .br {
          width: 100%;
          height: 1px;
          background: #eeeeee;
          margin: 30px 0px;
      }

      .blog-pagination {
          margin-top: 80px;
      }

      .blog-pagination .page-link {
          font-size: 14px;
          position: relative;
          display: block;
          padding: 0;
          text-align: center;
          margin-left: -1px;
          line-height: 45px;
          width: 45px;
          height: 45px;
          border-radius: 0 !important;
          color: #8a8a8a;
          border: 1px solid #f0e9ff;
          margin-right: 10px;
      }

      .blog-pagination .page-link i,
      .blog-pagination .page-link span {
          font-size: 13px;
      }

      .blog-pagination .page-link:hover {
          background-color: var(--secondary-color-blue);
          color: #fff;
      }

      .blog-pagination .page-item.active .page-link {
          background-color: #fbf9ff;
          border-color: #f0e9ff;
          color: #888888;
      }

      .blog-pagination .page-item:last-child .page-link {
          margin-right: 0;
      }

      /* Banner Area */

      .banner_area {
          position: relative;
          z-index: 1;
      }

      .banner_area .banner_inner {
          position: relative;
          overflow: hidden;
          width: 100%;
          min-height: 110px;
          background: var(--secondary-color-blue);
          z-index: 1;
          background-size: cover;
      }

      .banner_area .banner_inner .banner_content h2 {
          color: #fff;
          font-size: 27px;
          font-family: "Josefin Sans", sans-serif;
          margin-bottom: 0;
          font-weight: bold;
      }

      .banner_area .banner_inner .banner_content p {
          color: #666666;
          font-size: 15px;
      }

      .banner_area .banner_inner .banner_content .page_link {
          padding: 25px;
          display: inline-block;
      }

      .banner_area .banner_inner .banner_content .page_link a {
          font-size: 15px;
          color: #fff;
          font-family: "Open Sans", sans-serif;
          margin-right: 7px;
          position: relative;
          font-weight: 500;
      }

      .banner_area .banner_inner .banner_content .page_link a:before {
          content: "/";
          position: absolute;
          right: -8px;
          top: 50%;
          transform: translateY(-50%);
      }

      .banner_area .banner_inner .banner_content .page_link a:last-child {
          margin-right: 0px;
      }

      .banner_area .banner_inner .banner_content .page_link a:last-child:before {
          display: none;
      }

      .banner_area .banner_inner .banner_content .page_link a:hover {
          color: #000;
      }

      .area-padding {
          padding: 130px 0;
      }

      @media (max-width: 767px) {
          .home_banner_area .banner_inner .banner_content span::after {
              display: none;
          }

          .home_banner_area .banner_inner .banner_content h3 {
              font-size: 33px;
          }

          .home_banner_area .banner_inner .banner_content h3 br {
              display: none;
          }

          .home_banner_area .banner_inner .banner_content .main_btn {
              margin-top: 14px;
          }

          .home_banner_area .banner_inner .banner_content span {
              font-size: 15px;
              margin-bottom: 6px;
          }

          .footer-area {
              padding-top: 70px;
              padding-bottom: 20px;
          }

          .footer-bottom {
              margin-top: 35px;
              padding-top: 40px;
          }

          .footer-area .footer-bottom .footer-social {
              margin-top: 15px !important;
          }
      }

      /* End Banner Area */

  </style>
  @endsection