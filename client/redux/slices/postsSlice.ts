import { PayloadAction, createAsyncThunk, createSlice } from '@reduxjs/toolkit';
import axios from 'axios';

const initialState = {
  postsState: [],
};

export const getPosts = createAsyncThunk('fetchPosts', async () => {
  const response = await axios
    .get('http://localhost:4000/posts')
    .then((res) => res.data);
  return response;
});

export const postsSlice = createSlice({
  name: 'postsSlice',
  initialState,
  reducers: {
    // allPosts(state) {
    //   state.postsState;
    // },
  },
  extraReducers: (builder) => {
    builder.addCase(
      getPosts.fulfilled,
      (state, action: PayloadAction<string>) => {
        state.postsState.push(action.payload);
      }
    );
  },
});

// Action creators are generated for each case reducer function
// export const { allPosts } = postsSlice.actions;

export default postsSlice.reducer;
