import { configureStore } from '@reduxjs/toolkit';

import postsReducer from '../slices/postsSlice';
import { TypedUseSelectorHook, useDispatch, useSelector } from 'react-redux';

export function makeStore() {
  return configureStore({
    reducer: {
      postsReducer: postsReducer,
    },
  });
}

const store = makeStore();

// Infer the `RootState` and `AppDispatch` types from the store itself
export type RootState = ReturnType<typeof store.getState>;
export const useAppSelector: TypedUseSelectorHook<RootState> = useSelector;
// Inferred type: {posts: PostsState, comments: CommentsState, users: UsersState}
export type AppDispatch = typeof store.dispatch;
export const useAppDispatch: () => AppDispatch = useDispatch;

// export type AppThunk<ReturnType = void> = ThunkAction<
//   ReturnType,
//   AppState,
//   unknown,
//   Action<string>
// >;

export default store;
