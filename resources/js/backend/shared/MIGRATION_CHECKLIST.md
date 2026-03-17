# Frontend Optimization - Migration Checklist

## 📋 Overview

This checklist will help you track progress as you migrate from duplicated module structures to the optimized shared architecture.

**Total Effort:** ~3-4 hours for all modules
**Difficulty:** Easy (mostly deleting code!)
**Experience Level:** Intermediate Vue.js

---

## Phase 0: Preparation ✅ COMPLETE

- [x] Shared infrastructure created
- [x] Store factory implemented
- [x] Generic pages built
- [x] Composables created
- [x] Documentation written
- [x] Helpers centralized

**Time: ~3-4 hours (one-time setup)**

---

## Phase 1: Blog Module Migration

### 1.1 Preparation
- [ ] Read [QUICK_REFERENCE.md](./QUICK_REFERENCE.md)
- [ ] Read [OPTIMIZATION_GUIDE.md](./OPTIMIZATION_GUIDE.md)
- [ ] Create backup of Blog module
- [ ] Have tests ready to run

### 1.2 Setup Configuration
- [ ] Update `Blog/setup/index.ts`
  - [ ] Import `ModuleConfig` type
  - [ ] Ensure all required fields present
  - [ ] Import form_fields
  - [ ] Add missing page titles (all_page_title, create_page_title, etc.)
  - [ ] Verify API endpoint
  - [ ] Verify permissions array

### 1.3 Store Replacement
- [ ] Delete `Blog/store/actions/` folder (~150 lines)
- [ ] Delete `Blog/store/async_actions/` folder (~300 lines)
- [ ] Delete `Blog/store/helpers/` folder (~50 lines)
- [ ] Delete `Blog/store/initial_state.ts` (~50 lines)
- [ ] Backup current `Blog/store/index.ts`
- [ ] Replace with factory call (2 lines):
  ```typescript
  import { createModuleStore } from "@shared/modules/store-factory";
  import setup from "../setup";
  export const useBlogStore = createModuleStore(setup);
  ```
- [ ] Test store works: `useBlogStore()` returns store object
- [ ] Verify all actions available: get_all, create, update, delete, etc.

### 1.4 Update Routes
- [ ] Update `Blog/setup/routes.ts`
  - [ ] Import `GenericAllPage` from `@shared/pages`
  - [ ] Import `GenericFormPage` from `@shared/pages`
  - [ ] Update all/list route to use `GenericAllPage`
  - [ ] Update create route to use `GenericFormPage`
  - [ ] Update edit route to use `GenericFormPage`
  - [ ] Remove imports of old page components
  - [ ] Pass `moduleConfig` and `store` as props to components

### 1.5 Update Pages
- [ ] Delete `Blog/pages/All.vue` (if not needed)
- [ ] Delete `Blog/pages/Form.vue` (if not needed)
- [ ] Delete `Blog/pages/Details.vue` (if not needed)
- [ ] Keep any custom pages needed
- [ ] Create wrapper pages if needed:
  ```vue
  <template>
    <GenericAllPage :moduleConfig="blogSetup" :store="useBlogStore()" />
  </template>
  ```

### 1.6 Module Registration
- [ ] Add to `shared/modules/registry.ts`:
  ```typescript
  import blogSetup from "@modules/Blog/setup";
  ```
- [ ] Add to `moduleRegistry` object:
  ```typescript
  export const moduleRegistry: ModuleRegistry = {
    blog: blogSetup,
    // ...
  };
  ```

### 1.7 Testing
- [ ] Navigate to Blog list page
- [ ] Verify table displays with data
- [ ] Test search functionality
- [ ] Test pagination
- [ ] Test filter button
- [ ] Click "Create" - form appears
- [ ] Fill form and submit
- [ ] Verify new item appears in list
- [ ] Click edit button on item
- [ ] Form pre-populates with data
- [ ] Edit form and submit
- [ ] Verify changes appear in list
- [ ] Click delete button
- [ ] Verify item is deleted from list
- [ ] Check browser console for errors
- [ ] Test on mobile (responsive)

### 1.8 Cleanup
- [ ] Delete old page components
- [ ] Delete old store actions
- [ ] Delete old helpers (if using shared)
- [ ] Update any imports throughout module
- [ ] Verify no unused files remain

### 1.9 Verification
- [ ] `npm run dev` - No errors
- [ ] All features work
- [ ] No console errors
- [ ] Bundle size decreased
- [ ] Performance improved or same

**Subtotal Time: ~45-60 minutes**

---

## Phase 2: BlogCategory Module Migration

### 2.1 Preparation
- [ ] Review Blog migration lessons learned
- [ ] Create backup of BlogCategory module

### 2.2-2.9: Follow Phase 1 Steps
- [ ] 2.2 Setup Configuration (5 min)
- [ ] 2.3 Store Replacement (5 min)
- [ ] 2.4 Update Routes (10 min)
- [ ] 2.5 Update Pages (5 min)
- [ ] 2.6 Module Registration (2 min)
- [ ] 2.7 Testing (15 min)
- [ ] 2.8 Cleanup (5 min)
- [ ] 2.9 Verification (5 min)

**Subtotal Time: ~45 minutes** (faster now!)

---

## Phase 3: BlogWriter Module Migration

### 3.1-3.9: Follow Phase 1 Steps
- [ ] 3.1 Preparation (2 min)
- [ ] 3.2 Setup Configuration (5 min)
- [ ] 3.3 Store Replacement (5 min)
- [ ] 3.4 Update Routes (10 min)
- [ ] 3.5 Update Pages (5 min)
- [ ] 3.6 Module Registration (2 min)
- [ ] 3.7 Testing (15 min)
- [ ] 3.8 Cleanup (5 min)
- [ ] 3.9 Verification (5 min)

**Subtotal Time: ~45 minutes** (even faster!)

---

## Phase 4: Other Management Modules (Optional)

These modules can be migrated same way:

### UserManagement
- [ ] Backup
- [ ] Update setup
- [ ] Replace store
- [ ] Update routes
- [ ] Register
- [ ] Test
- [ ] Cleanup
**Time: ~45 minutes**

### RoleManagement
- [ ] Same steps
**Time: ~45 minutes**

### SettingManagement
- [ ] Same steps
**Time: ~45 minutes**

### Other Custom Modules
- [ ] Same steps per module

---

## Verification Checklist (After Each Phase)

After completing each module migration, verify:

- [ ] **Data Loading**
  - [ ] List page loads
  - [ ] Data displays in table
  - [ ] Counter shows correct total
  
- [ ] **Search & Filter**
  - [ ] Search box works
  - [ ] Filter button opens
  - [ ] Can apply filters
  
- [ ] **CRUD Operations**
  - [ ] Create button works
  - [ ] Form displays correctly
  - [ ] Can create item
  - [ ] Can view details
  - [ ] Can edit item
  - [ ] Can delete item
  
- [ ] **Pagination**
  - [ ] Pagination controls display
  - [ ] Can navigate pages
  - [ ] Previous/Next buttons work
  
- [ ] **Responsive Design**
  - [ ] Mobile view works
  - [ ] Tablet view works
  - [ ] Desktop view works
  
- [ ] **Performance**
  - [ ] Pages load quickly
  - [ ] Minimal console errors
  - [ ] No memory leaks
  
- [ ] **Code Quality**
  - [ ] No TypeScript errors
  - [ ] No ESLint warnings
  - [ ] Code formatted properly

---

## Troubleshooting

### Issue: Store returns undefined
**Solution:** Check store is exported properly in module/store/index.ts

### Issue: Form not loading
**Solution:** Verify form_fields defined in setup/form_fields.js

### Issue: Routes not working
**Solution:** Verify route names follow convention: {Prefix}All, {Prefix}Create, etc.

### Issue: Data not loading
**Solution:** Check API endpoint in setup/index.ts matches backend route

### Issue: File upload not working
**Solution:** Verify form field type is 'file' and input name matches

### Issue: Search not working
**Solution:** Call `set_search_key()` after input

### Issue: TypeScript errors
**Solution:** Import types from @shared/types/module-config.ts

---

## Code Reduction Summary

After all migrations, you will have:

| Module | Before | After | Saved |
|--------|--------|-------|-------|
| Blog | 1,450 lines | 300 lines | 1,150 |
| BlogCategory | 1,450 lines | 300 lines | 1,150 |
| BlogWriter | 1,450 lines | 300 lines | 1,150 |
| Shared | 0 lines | 900 lines | - |
| **Total** | **4,350 lines** | **1,800 lines** | **2,550** |

**Net Reduction: 59%**

---

## Timeline Estimate

- **Phase 0**: ~3-4 hours (one-time setup) ✅
- **Phase 1**: ~60 minutes
- **Phase 2**: ~45 minutes
- **Phase 3**: ~45 minutes
- **Phases 4+**: ~45 minutes each

**Total Time: ~5-7 hours** for complete migration of 3+ modules

---

## Success Criteria

You'll know migration is successful when:

- ✅ All modules use factory stores (~2 lines each)
- ✅ All modules use generic pages
- ✅ Module registry contains all modules
- ✅ No duplication in store/pages/helpers
- ✅ Code base reduced by ~60%
- ✅ All tests pass
- ✅ No console errors
- ✅ Performance maintained or improved
- ✅ Easier to add new modules

---

## Next Steps After Migration

Once core modules migrated:

1. **Measure Success**
   - [ ] Bundle size analysis
   - [ ] Code lines count
   - [ ] Performance metrics

2. **Document Changes**
   - [ ] Update team wiki
   - [ ] Create migration guide for team
   - [ ] Share lessons learned

3. **Enable Others**
   - [ ] Train team on new architecture
   - [ ] Create template for new modules
   - [ ] Update coding standards

4. **Future Improvements**
   - [ ] Add custom event hooks
   - [ ] Implement validation schemas
   - [ ] Add advanced filtering UI
   - [ ] Create module templates CLI tool

---

## Notes Section

Use this space to track migration notes, issues, and solutions:

```
Blog Module (Date: ______):
- Issue: _______________
- Solution: _____________

BlogCategory (Date: ______):
- Lesson: _______________

BlogWriter (Date: ______):
- Improvement: __________
```

---

**Keep this checklist handy as you implement!**

Updated: March 18, 2026
Status: Ready for Implementation
