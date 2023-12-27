<template>
    <form>
      <label for="Customername">Customer Name</label>
      <input type="text" placeholder="Enter customer name" v-model="Customername" id="Customername">
  
      <label for="RoomCategory">Room Category</label>
      <input type="text" placeholder="Enter room category" v-model="RoomCategory" id="RoomCategory">
  
      <label for="CheckinDate">Check-In Date</label>
      <input type="date" v-model="CheckinDate" id="CheckinDate">
  
      <label for="PaymentStatus">Payment Status</label>
      <input type="text" placeholder="Enter payment status" v-model="PaymentStatus" id="PaymentStatus">
  
      <button @click.prevent="rent">Submit</button>
      <button @click.prevent="resetForm">Reset</button>
    </form>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        Customername: '',
        RoomCategory: '',
        CheckinDate: '',
        PaymentStatus: '',
      };
    },
  
    methods: {
      async rent() {
        const formData = new FormData();
        formData.append('Customername', this.Customername);
        formData.append('RoomCategory', this.RoomCategory);
        formData.append('CheckinDate', this.CheckinDate);
        formData.append('PaymentStatus', this.PaymentStatus);
  
        try {
          const response = await axios.post('user/booking', formData, {
            headers: {
              'Content-Type': 'multipart/form-data',
            },
          });
  
          console.log('Headers:', axios.defaults.headers);
          console.log('Request Data:', formData);
          console.log(response);
  
          this.$emit('bookingSuccess', response.data);
  
        } catch (error) {
          console.error(error);
          this.$emit('bookingError', error);
        }
      },
  
      resetForm() {
        this.Customername = '';
        this.RoomCategory = '';
        this.CheckinDate = '';
        this.PaymentStatus = '';
      },
    },
  };
  </script>
  
  <style>
     body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="date"] {
      /* Additional styling for date input if needed */
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  